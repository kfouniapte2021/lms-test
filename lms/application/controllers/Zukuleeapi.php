<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Zukuleeapi extends CI_Controller
  {
    public $tbl_user = "users";
    public $tbl_session = 'app_user_session';
    public $userObject = 'id as user_id,username,name,email,phone,CONCAT("uploads/",image) AS profilePic';
    public $data = array();
    function __construct()
      {
   
     header('Access-Control-Allow-Origin: *'); //for allow any domain, insecure
     header('Access-Control-Allow-Headers: *'); //for allow any headers, insecure
     header('Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE'); //method allowed
      header('Content-Type: application/json');
    
        parent::__construct();
     

        $this->load->model('Api_model', 'AM');
        $this->load->library(array(
            'auth/ion_auth',
            'ion_auth'
        ));
		//pre($_SESSION);
        define('IMG', base_url() . 'uploads/');
        //define('APPKEY', 'imrankhan');
        $this->data["status"] = 200;
        $this->data["error"]  = false;
        /*request status 0=pending,1=accepted,2=complete,3=canceled by driver,4= cancelled by customer*/
        $header               = $this->input->request_headers();
        /*if($header['Appkey']!=APPKEY){
         $this->AM->error('Invalid request');exit;
        }*/
        if (isset($header['Accesstoken']))
          {
			
            $uid = $this->validateAccessToken($header['Accesstoken']);
            define('USER_ID', (int) $uid);
          }
		  elseif (isset($header['accesstoken']))
          {
			
            $uid = $this->validateAccessToken($header['accesstoken']);
            define('USER_ID', (int) $uid);
          }
		  elseif (isset($_SESSION['user_id']))
          {
			
            $uid = $_SESSION['user_id'];
            define('USER_ID', (int) $uid);
          }
      }
    public function index()
      {
        echo 'Welcome to Zukulee apis';
      }
	  
	  /**************************
	  *
	  *API END POINTS STARTED FOR ZUKULEE LMS SITE 
	  *
	  *********************************/
	      public function submitAssignment()
      {
        $this->checkLogin();
		//$this->response($_FILES);exit;
	//	$this->response($_FILES);
        extract($_POST);
        if ($this->AM->verifyRequiredParams(array(
            "assignment_id"
        )))
          {
            $_POST['user_id'] = USER_ID;
			   if (isset($_FILES['file']['name']) and $_FILES['file']['name']!='')
          {
            $info    = pathinfo($_FILES['file']['name']);
            $ext     = $info['extension']; // get the extension of the file
            $newname = rand(5, 3456) * date(time()) . "." . $ext;
            $target  = 'uploads/' . $newname;
            if (move_uploaded_file($_FILES['file']['tmp_name'], $target))
              {
                $_POST['file'] =  $newname;
              }else{
				  $this->error('File not uploaded');
				  }
          }else{
			  $this->error('Please select a pdf file');
			  }
			
            $array            = array(
                'assignment_id' => $assignment_id,
                'file' => $_POST['file'],
                'student_id' => USER_ID
            );
            $where            = array(
                'assignment_id' => $assignment_id,
                'student_id' => USER_ID
            );
			if(checkExist('assignment_submitted', $where)){
				if ($this->db->where($where)->update('assignment_submitted', $array))
              {
                $this->data['message'] = 'Assignment resubmitted successfully!';
                $this->response($this->data);exit;
              }
				}else{
					if ($this->db->insert('assignment_submitted', $array))
              {
                $this->data['message'] = 'Assignment Submitted successfully!';
                $this->response($this->data);exit;
              }else{
				  $this->response($this->db->error());exit;
				  }
					}
			
          }
      }

	  public function getRegistrationFormData()
	  {
		   $this->data['classes']=$this->getActiveClasses();
		   $this->data['pricing']=$this->db->select('*')->get('registration_pricing')->result_array();
		  $this->AM->response( $this->data);
	}
	
	public function getSubmittedAssignmentByUserId()
	  {
		  $where=array('student_id'=>$_GET['user_id']);
		$this->db->select("a.*,asm.topic,u.name as studentName,CONCAT('".base_url()."uploads/',a.file) AS file,CONCAT('".base_url()."uploads/',u.image) AS profilePic")
         ->from('assignment_submitted a')
         ->join('assignment asm', 'asm.id = a.assignment_id')
         ->join('users u', 'u.id = a.student_id')
		 ->where($where);
$this->data['data'] = $this->db->get()->result_array();
		   
		  $this->AM->response( $this->data);
	}
	 
	 function getActiveClasses(){
	$data = array();
	$query =$this->db->where('status',1)->get('batch_session');
if($query !== FALSE && $query->num_rows() > 0){
$batch_id=	$query->row()->id; // active batch id
//$batch_id=	3;
   $query=$this->db->select('id as class_id,class_name')->where(array('batch_id'=>$batch_id))->get('classes');
   
	   if($query !== FALSE && $query->num_rows() > 0){
	 	$data=  $query->result_array();
		}

   
}

return $data;
	
	}
function getSchedule(){
	if(!isset($_GET['class_id'])){
		$this->error('class_id is required');
		}
	$this->data['data'] =$this->db->query("SELECT p.*,u.name as teacherName FROM tbl_schedule as p 
		join users as u on u.id=p.teacher_id
		where p.class_id=".$_GET['class_id'])->result_array();
	$this->AM->response($this->data);
	}
function getReferredBy(){
	if(!isset($_GET['referred_by'])){
		$this->error('referred_by is required');
		}
	$data =$this->db
                ->select("id as user_id,username,name,email,phone,CONCAT('".base_url()."uploads/',image) AS profilePic,referal_code")
                ->where('referred_by', $_GET['referred_by'])
                ->limit(1)
                ->get('users')
                ->result_array();
				$this->data['total_referred']=count($data);
				$this->data['data']=$data;
	$this->AM->response($this->data);
	}
	

	
	
	
	     /****************** SIGNUP OR REGISTER **************************/
    public function signup()
      {
        extract($_POST);
		
        $response = array();
        if ($this->AM->verifyRequiredParams(array(
            "name",
            "email",
            "password",
            "phone",
            "class_id",
			"level",
			"lang"
        )))
          {
			  
            //Checking Email already exists

            $emailExist = $this->AM->mail_exists($email);
            if ($emailExist)
              {
                $response['status']  = 204;
                $response['message'] = "Email exist already";
                $this->AM->response($response);exit;
              }
            $this->form_validation->set_rules('password', 'password', 'required|min_length[8]|max_length[12]');
            if ($this->form_validation->run() == false)
              {
                $this->AM->response(array(
                    "status" => 204,
                    "message" => strip_tags(validation_errors())
                ));
              }
			  $this->dopayment();
            //$password = $this->hashPassword($_POST["password"]);
            $activation_code = uniqid();
            $additional_data = array(
                'email' => $email,
                'user_type' => USER,
                'name' => $name,
                'class_id' => $class_id,
                'phone' => $phone, // arslan
                'activation_code' => $activation_code,
                'password' => $password,
                'active' => 0,
                'referal_code' => uniqid()
            );
			if(isset($_POST['referred_by']) and $_POST['referred_by']!=''){
               $additional_data['referred_by']= $_POST['referred_by'];
            }
            //  $id=$this->AM->insert($this->tbl_user, $additional_data);
            if ($this->ion_auth->register($email, $password, $email, $additional_data))
              {
                $userid       = $this->db->insert_id();
				
				// save user session and class and level in student_session table
				
				$this->db->insert('users_course',array('class_id'=>$class_id,'user_id'=>$userid,'batch_id'=>current_batch_id(),'level'=>$level));
				//lq();
                $user         = $this->AM->getUserByEmail($email);
                $href         = base_url() . 'verify/email/' . $activation_code;
                $htmlContent  = $this->AM->setEmailTemplate($name, $href);
                $to           = $email;
                $from         = 'noreply@ZukuleeLearning.com';
                $from_heading = 'Zukulee Learning';
                $subject      = 'EMAIL VERIFICATION';
                if ($this->input->ip_address() != '127.0.0.1')
                  {
                    $this->crud->send_mail($to, $from, $from_heading, $subject, $htmlContent);
                  }
                //removing password from response
                if ($user != NULL)
                  {
                    $response["status"]  = 200;
                    $response['message'] = "Successfully Signup, check your inbox to activate account";
                    // $response['user'] = $user;
                    echo json_encode($response);
                    exit;
                  }
              }
          } //validation of required fields
      }
    function hashPassword($pass)
      {
        return $this->ion_auth->hash_password($pass);
      }
    function checkPass($id, $pass)
      {
        $this->load->library(array(
            'auth/ion_auth',
            'ion_auth'
        ));
        return $this->ion_auth->hash_password_db($id, $pass);
      }
    function sociallogin()
      {
        extract($_POST);
        $this->AM->verifyRequiredParams(array(
            "social_id",
            "social_type"
        ));
        if (!isset($_POST['user_cat']))
          {
            $_POST['user_type'] = USER;
          }
        $where = array(
            'social_id' => $social_id,
            'social_type' => $social_type
        );
        if (checkExist(TBL_USER, $where) == 1)
          {
            // do login 
            $d                     = $this->db->select($this->userObject)->from(TBL_USER)->where($where)->get();
            $fuck                  = $d->row();
            //$this->AM->response($fuck->user_id);
            $row                   = $this->AM->getUserObject($fuck->user_id);
            $row['access_token']   = $this->AM->createSession($fuck->user_id);
            $this->data['user']    = $row;
            $this->data["message"] = 'Login successfull with ' . $_POST['social_type'];
            $this->AM->response($this->data);
          }
        else
          {
            $_POST['referal_code'] = uniqid();
            if ($this->db->insert(TBL_USER, $_POST))
              {
                $USER_ID = $this->db->insert_id();
                $row     = $this->AM->getUserObject($USER_ID);
                //removing password from response
                unset($row['password']);
                $row['access_token']   = $this->AM->createSession($USER_ID);
                $this->data['user']    = $row;
                $this->data['message'] = 'Registered Successfully using ' . $_POST['social_type'];
                $this->AM->response($this->data);
              }
            else
              {
                $this->AM->error("Error, Unable to create account!");
                exit;
              }
          }
      }
    public function login()
      {
        extract($_POST);
        $response = array();
        //Validating Required Params
        if ($this->AM->verifyRequiredParams(array(
            "email",
            "password",
            "devicetype",
            "device_id",
            "social_type"
        )))
          {
            if ($social_type != 'normal')
              {
                $this->sociallogin();
                exit;
              }
            // check for correct email and password
            $row = $this->db->select('id,active')->where('email', $email)->get($this->tbl_user);
            if ($row->num_rows() > 0)
              {
                if ($this->ion_auth->login($email, $password))
                  {
                    $user              = $row->row();
					
                    //update device_type and device_id
                    $userUpdateDevices = $this->AM->updateDevice($user->id, $devicetype, $device_id);
                    $access_token      = $this->AM->createSession($user->id);
                    // get the user by email
					$userid=$user->id;
                    $user              = $this->AM->getUserObject($user->id);
                    //removing password from response
                    unset($user['password']);
                    $user['access_token'] = $access_token;
                    if ($user != NULL)
                      {
                        $response["status"]  = 200;
                        $response['message'] = "Successfully Login";
                         $batch=$this->db->select("uc.class_id,c.class_name,uc.level")
->from('users_course as uc')
->join('classes as c','c.id=uc.class_id')->get()->result_array();
$user = array_merge( $user,$batch[0]);

                        $response['user']    = $user;
						

/*
SELECT  FROM `users_course` as uc
join classes as c on c.id=uc.class_id
*/
					$response['is_subscribed'] =	$this->ifSubscribedtrue($userid);
						// check if subscribed
                        echo json_encode($response);
                        exit;
                      }
                  }
				  else{
                if($row->row()->active==0){
					$response['status']  = 204;
                    $response['message'] = 'You nee to activate your account.Check your inbox  ';
                    echo json_encode($response);exit;
					} else
                  {
                    // user credentials are wrong
                    $response['status']  = 204;
                    $response['message'] = 'Your password seems  incorrent';
                    echo json_encode($response);exit;
                  }
				  }
              } //validation of required fields
            else
              {
                // user credentials are wrong
                $response['status']  = 204;

                $response['message'] = 'Login failed. Incorrect credentials';
                echo json_encode($response);
                exit;
              }
          }
      }
	 /**************************
	  *
	  *API END POINTS ENDED HERE FOR ZUKULEE LMS SITE 
	  *
	  *********************************/
	  
	  
	  public function instructors(){
		

 $data=$this->db->select("u.id,u.name,u.email,u.phone,u.address,u.designation,u.description,subject.title as assignedSubject,CONCAT('".IMG."',u.image) as image")
->from('users as u')
->join('course_categories as subject','subject.id=u.subject_id')->get()->result_array();
if(count($data)>0){
	$this->data['status']=	 200;

$this->data['instructors']=	 $data;
	}else{
$this->data['instructors']=	 array();
$this->data['status']=	 200;
		}


		$this->response($this->data);
	}
	
 
	
	
	public function getuserclassid(){
		if(defined('USER_ID')){
		$clid= $this->db->select('class_id')->from('users')->where('id',USER_ID)->get()->row()->class_id;
		return $clid;
		}else{
			$this->error('user id is missing');
			}
		}
		  public function homeData(){
			  /*****/
			$clid=  $this->getuserclassid();
		$courses= $this->db->select("c.*,c.terms as class_name,
			CONCAT('".IMG."',c.subject_thumb) as thumbnail_image,
			CONCAT('".IMG."',c.trainerImage) as trainerImage")
			->where('c.classid',$clid)
			->get('getcourse as c');
			$this->data['courses']=array();
			if($courses->num_rows()>0){
				$response['total_course']=$courses->num_rows();
				foreach($courses->result() as $row){
					unset($row->subject_thumb);
					$row->totalStudent=count_where(TBL_USER,array('class_id'=>$row->classid));
					$row->totalLectures=count_where('course_lectures',array('course_id'=>$row->course_id));
					 $this->data['courses'][]=$row;
					}
				}

/* $data=$this->db->select("u.id,u.name,u.email,u.phone,u.address,u.designation,u.description,subject.title as assignedSubject,CONCAT('".IMG."',u.image) as image")
->from('users as u')
->join('course_categories as subject','subject.id=u.subject_id')->get()->result_array();
if(count($data)>0){
$this->data['instructors']=	 $data;
	}else{
$this->data['instructors']=	 array();
		}*/
/****************************/		
$d=$this->db->select("c.id as course_id,c.post_title as title,c.youtube_into as youtube_video,subject.title as subject")
->from('course as c')
->where('c.class_id',$clid)
->join('course_categories as subject','subject.id=c.course_category_id')->get();
$this->data['youtubeData']=array();
if($d->num_rows()>0){
 foreach ($d->result() as $row) {
		$url = $row->youtube_video;
		
		if (strpos($url, "v=")!==false){
		$array= explode('v=',$url);
		
		$row->youtube_video = $array[1];
		$row->youtube_thumb='https://img.youtube.com/vi/'.$array[1].'/mqdefault.jpg';
		}if (strpos($url, "youtube.com/embed/")!==false){
		$array= explode('embed/',$url);
		$row->youtube_video = $array[1];
		$row->youtube_thumb='https://img.youtube.com/vi/'.$array[1].'/mqdefault.jpg';
		
		}
		$row->subject=$row->subject;
		$this->data['youtubeData'][] = $row;
        }
}
/******************************/
$this->data["users"]=array();
/*$q="SELECT u.id as user_id,c.modified, u.name,u.email as email,u.image,u.online as active,
	u.device_id as push_id  FROM ".$this->tbl_user." as u  
	 left outer join conversations as c on u.id=c.owner_id or u.id=c.receiver_id 
where u.id!='".$user_id."'   group by u.id order by c.modified asc ";
	$data = $this->db->query($q);
*/
$q="SELECT u.id as user_id,c.modified, u.name,u.email as email,u.image,u.bio,u.online as active,
	u.device_id as push_id  FROM ".$this->tbl_user." as u  
	
	 left outer join conversations as c on u.id=c.owner_id or u.id=c.receiver_id 
	 join friends as f on f.friend_id=u.id
where u.id!='".$user_id."' and f.user_id ='".USER_ID."' group by u.id order by c.modified asc ";
	$data = $this->db->query($q);
	if ($data->num_rows()>0){
		 
	foreach($data->result() as $row){
		 $this->data["users"][] = array(
            'user_id' => $row->user_id,
'name' => $row->name,
'is_friend' => true,
'bio' => $row->bio,
            'email' => $row->email,
            'image' => base_url().'uploads/'.$row->image,
            'active' => $row->active,
            'push_id' => $row->push_id
        );
		}
	}
/*****************/
	$this->response($this->data);
}
	
    function getClasses()
      {
		  $this->data['status']=	 200;
		  $this->data['error']=	 false;
        $this->data['data'] = $this->db->select('id as class_id,class_name ')->from('classes')->get()->result_array();
        $this->response($this->data);
      }
    function getMembershipPlans()
      {
        $this->data['data'] = $this->db->get('membership_plans')->result_array();
        $this->response($this->data);
      }
    function getEvents()
      {
        $this->data['data'] = $this->db->get('tbl_event')->result_array();
        $this->response($this->data);
      }
    function getAssignmentsByCouseID()
      {
		  if(!isset($_GET['course_id']) or $_GET['course_id']==''){
			  $this->error('course_id is required');
			  }
			  else{
				  $where=array('course_id'=>$_GET['course_id']);
        $this->data['data'] = $this->db->where($where)->get('assignment')->result_array();
        $this->response($this->data);
			  }
      }
	  
	  
	  
    function getQuizByCourseId()
      {
		   $this->AM->verifyRequiredParams(array("course_id"));
        $quizData = $this->db->select("*")
		->where(array('course_id'=>$_POST['course_id'],'status'=>1))
		->get('course_quiz');
		$this->data["error"]  = true;
		$this->data['objective']=array();
		$this->data['subjective']=array();
		if($quizData->num_rows()>0){
			$this->data["error"]  = false;
		foreach($quizData->result() as $quiz){
			// get quiz objective/subject
				// then get its course_objectives
			$this->data['quiz_title']=$quiz->quiz_title;
			$this->data['quiz_id']=$quiz->id;
			$this->data['course_id']=$quiz->course_id;
				
				$course_objectives = $this->db->where('quiz_id',$quiz->id)->get('course_objectives');
				//$course_objectives
				if($course_objectives->num_rows()>0){
		foreach($course_objectives->result() as $objective){
			// attach objctive option
			$objective->options=$this->db->where('question_id',$objective->id)->get('course_objectives_options')->result_array();
			$this->data['objective'][]=$objective;
		}
				}
				//$quiz->course_objectives=$this->getMult
				
			
				$this->data['subjective'] = $this->db->where('quiz_id',$quiz->id)->get('course_subjectives')->result_array();
			
			
			
			
			}
		
		}
		
        $this->response($this->data);
      }
	  
	  
	  
    function getBooks()
      {
		 $where= array('status'=>1);
		 if(isset($_POST['cat_id']) and $_POST['cat_id']!=''){
			$where['cat_id'] =$_POST['cat_id'];
			 }
		   $this->AM->verifyRequiredParams(array("cat_id"));
        $data = $this->db->select("b.id as book_id,b.language,c.title as subject,b.title,CONCAT('".base_url()."',b.bookfile) as bookfile,CONCAT('".base_url()."',b.image) as bookimage")
		->where($where)
		->join('course_categories c', 'c.id=b.course_category_id')
		->get('library_management as b');
		
		if($data->num_rows()>0){
	$this->data['status']=	 200;
			foreach($data->result() as $row){
				$bookimageArr= explode('cover/',$row->bookimage);
				$imageName =$bookimageArr[1];
				$arr=explode('.',$imageName);
				$row->bookimage=$bookimageArr[0].'cover/'.$arr[0].'_thumb.'.$arr[1];;
			$books[]=	 $row;
			
			}
			$this->data['data']=$books;
			
	}else{
$this->data['data']=	 array();
$this->data['status']=	 200;
		}
        $this->response($this->data);
      }
	  
	  function getBooksCat()
      {
        $data = $this->db->select("b.id as cat_id,b.title,CONCAT('".IMG."',b.image) as image")->get('bookcategories as b')->result_array();
		if(count($data)>0){
	$this->data['status']=	 200;

$this->data['data']=	 $data;
	}else{
$this->data['data']=	 array();
$this->data['status']=	 200;
		}
        $this->response($this->data);
      }
	   public function profile()
      {
        $header = $this->input->request_headers();
        ////    $this->response(array('POST'=>$_POST,'header'=>$header));
        $this->checkLogin();
        extract($_POST);
        // get the user by id
		
        $user = $this->AM->getUserById(USER_ID);
        //removing password from response
        if ($user != NULL)
          {
            $this->data['message'] = "User Profile";
            $this->data['user']    = $user;
            $this->response($this->data);
          }
        else
          {
            // user credentials are wrong
            $this->error('User does not exists');
          }
      }
	  
	  public function getCourses(){

			//,CONCAT('".IMG."',s.thumbnail) as thumbnail,CONCAT('".IMG."',s.video_url) as video_url,CONCAT('".IMG."',s.trainerImage) as trainerImage
			$where=array('c.status'=>1);
			if(isset($GET['level'])){
			$where['terms']	=$GET['level'];
				}
				if(isset($GET['language'])){
			$where['language']	=$GET['language'];
				}
			$this->db->select("`c`.`id` AS `course_id`,`c`.`post_title` AS `courseTitle`,c.language,`c`.`youtube_into` AS `youtube_video`,`c`.`terms` AS `level`,`cl`.`class_name` AS `class_name`,`cl`.`id` AS `classid`,`cc`.`title` AS `subject`,`u`.`name` AS `trainerName`,CONCAT('".IMG."',u.image) as trainerImage,
			`c`.`price` AS `price`, CONCAT('".IMG."',c.thumbnail) as thumbnail")
         ->from('course c')
         ->join('course_categories cc', 'cc.id = c.course_category_id')
         ->join('classes cl', 'cl.id = c.class_id')
         ->join('users u', 'u.id = c.user_id')
		 ->where($where);
$data = $this->db->get();
			
			if($data->num_rows()>0){
				$response['total_course']=$data->num_rows();
				foreach($data->result() as $row){
					
					$row->totalStudent=count_where(TBL_USER,array('class_id'=>$row->classid));
					$row->totalLectures=count_where('course_lectures',array('course_id'=>$row->course_id));
					 $this->data['data'][]=$row;
					}
				}

		$this->response($this->data);
	}
	
	function getCourseDetail(){
		extract($_POST);
		 $this->AM->verifyRequiredParams(array("course_id"));
		 	$id=$course_id;
$where=array('`c`.`id`'=>$id);
			$this->db->select("`c`.`id` AS `course_id`,`c`.`post_title` AS `courseTitle`,c.language,`c`.`youtube_into` AS `youtube_video`,`c`.`terms` AS `level`,`cl`.`class_name` AS `class_name`,`cl`.`id` AS `classid`,`cc`.`title` AS `subject`,`u`.`name` AS `trainerName`,CONCAT('".IMG."',u.image) as trainerImage,
			`c`.`price` AS `price`, CONCAT('".IMG."',c.thumbnail) as thumbnail")
         ->from('course c')
         ->join('course_categories cc', 'cc.id = c.course_category_id')
         ->join('classes cl', 'cl.id = c.class_id')
         ->join('users u', 'u.id = c.user_id')
		 ->where($where);
$query = $this->db->get();

			if($query->num_rows()>0){
				$row =$query->row();
					$row->totalStudent=count_where(TBL_USER,array('class_id'=>$row->classid));
					//$row->totalLectures=count_where('course_lectures',array('course_id'=>$id));
					$row->post_description=strip_tags($row->post_description);
$this->data['data'] =$row;
				// get lectures of the course
				$lecturesArr=array();
				$lectures  = $this->db->select('id,course_id,title')->where(array('course_id'=>$id))->get('course_lectures');
				foreach($lectures->result() as $lecture){
					$lecture->videos=$this->getLecturebyid($lecture->id);
					$lecturesArr[]=$lecture;
					}
			$this->data['lectures']=$lecturesArr;
				}
			  $this->response($this->data);
		
}
	
	  
	  	public function coursesDetail($id){
	$res=array();
$where=array('`c`.`id`'=>$id);
			
			$this->db->select("`c`.`id` AS `course_id`,`c`.`post_title` AS `courseTitle`,c.language,`c`.`youtube_into` AS `youtube_video`,`c`.`terms` AS `level`,`cl`.`class_name` AS `class_name`,`cl`.`id` AS `classid`,`cc`.`title` AS `subject`,`u`.`name` AS `trainerName`,CONCAT('".IMG."',u.image) as trainerImage,
			`c`.`price` AS `price`, CONCAT('".IMG."',c.thumbnail) as thumbnail")
         ->from('course c')
         ->join('course_categories cc', 'cc.id = c.course_category_id')
         ->join('classes cl', 'cl.id = c.class_id')
         ->join('users u', 'u.id = c.user_id')
		 ->where($where);
$query = $this->db->get();

			if($query->num_rows()>0){
				$row =$query->row();
				
					$row->totalStudent=count_where(TBL_USER,array('class_id'=>$row->classid));
					//$row->totalLectures=count_where('course_lectures',array('course_id'=>$id));
					$row->post_description=strip_tags($row->post_description);
$res['courseDetail'] =$row;
				// get lectures of the course
				$lecturesArr=array();
				$lectures  = $this->db->select('id,course_id,title')->where(array('course_id'=>$id))->get('course_lectures');
				foreach($lectures->result() as $lecture){
					$lecture->videos=$this->getLecturebyid($lecture->id);
					$lecturesArr[]=$lecture;
					}
			$res['lectures']=$lecturesArr;
				}
		//		echo '<pre>';print_r($res);exit;
				return $res;
	
	}
	
	  	public function getAllLectures(){
				$res=array();
				// get lectures of the course
				extract($_POST);
		 $this->AM->verifyRequiredParams(array("course_id"));
		
				$lecturesArr=array();
				$lectures  = $this->db->select('id,course_id,title')->where(array('course_id'=>$course_id))->get('course_lectures');
				foreach($lectures->result() as $lecture){
					$lecture->videos=$this->getLecturebyid($lecture->id);
					$lecturesArr[]=$lecture;
					}
			  $this->data['data'] = $lecturesArr;
	$this->response($this->data);
	}
	
	function getLectureVideos(){
		extract($_POST);
		 $this->AM->verifyRequiredParams(array("lecture_id"));
			  $this->data['data']=$this->getLecturebyid($lecture_id);
			 

 /**************************send email to buyer ************************************/
				//$userInfo =$this->getTokenEmailType(USER_ID);
                $buyerHtml .= 'Dear user<br>';
                $buyerHtml .=  "The lecture  id is ".$lecture_id;;
                
                $buyerHtml .= '<br><br><br><br><a href="' . base_url() . '" target="_blank">Skillsquared Team </a>';
                $subjectLineBuyer = 'getLectures function Called';
                	$this->crud->send_mail('waseemafzal31@gmail.com',FROM,HEADING,$subjectLineBuyer,$buyerHtml);
                /*********************************************************************************/
         
			  $this->response($this->data);
		
}
	
	
	
		 public function  getLecturebyid($course_id)

	        {
				$path= base_url().'uploads/';
				$thumb= base_url().'uploads/';
			$res=array();	
$data = $this->db->select("cld.title as lecture_video_title,cld.duration as lecture_video_duration,CONCAT('".$path."',cld.video) as lecture_video,CONCAT('".$thumb."',cld.thumbnail) as thumbnail")->where('course_lectures_id',$course_id)->get('course_lectures_detail as cld');
				if($data->num_rows()>0)

				{
foreach($data->result() as $row){
	$row->lecture_video_title=preg_replace("/[^A-Za-z0-9 ]/", '', $row->lecture_video_title);
	$res[]=$row;
	}
			  
return $res;
			}

			else

			{

			return array() ;	

			}

		}

	
		 public function  getsavedlectures($course_id)

	        {
				$path= base_url().'uploads/lectures/';
				$data =   $this->db->query(
				"SELECT cl.id as course_lecture_id,cl.title as course_lecture_title,cld.title as lecture_video_title,cld.duration as lecture_video_duration,CONCAT('".$path."',cld.video) as lecture_video,
				cld.id as course_lectures_detail_id 

				FROM `course_lectures` AS cl

				INNER JOIN `course_lectures_detail` AS cld

				ON  cl.id = cld.course_lectures_id

				WHERE cl.course_id = ".$course_id."");

				if($data->num_rows()>0)

				{
return $data->result_array();
			  

			}

			else

			{

			return 0 ;	

			}

		}


    public function saveResult()
      {
        $this->checkLogin();
		//$this->response($_FILES);exit;
	//	$this->response($_FILES);
        extract($_POST);
        if ($this->AM->verifyRequiredParams(array(
            "quiz_id",
            "objective_marks"
        )))
          {
            $_POST['user_id'] = USER_ID;
			   if (isset($_FILES['pdffile']['name']) and $_FILES['pdffile']['name']!='')
          {
            $info    = pathinfo($_FILES['pdffile']['name']);
            $ext     = $info['extension']; // get the extension of the file
            $newname = rand(5, 3456) * date(time()) . "." . $ext;
            $target  = 'uploads/' . $newname;
            if (move_uploaded_file($_FILES['pdffile']['tmp_name'], $target))
              {
                $_POST['pdffile'] = 'uploads/' . $newname;
              }else{
				  $this->error('File not uploaded');
				  }
          }else{
			  $this->error('Please select a pdf file');
			  }
			
            $where            = array(
                'quiz_id' => $quiz_id,
                'user_id' => USER_ID
            );
			 if (checkExist('quize_attempted', $where) == 1)
              {				 
			$mydata = $this->db->where($where)->get('quize_attempted')->row();
			 $this->data['status'] = 204;
			  $total=(int) $mydata->objective_marks +(int) $mydata->long_questions_marks ;
			 $this->data['message'] = 'Your marks marks are: '.$total;
               $this->response($this->data);exit;
              }
                 elseif ($this->db->insert('quize_attempted', $_POST))
              {
            //    $this->data['message'] = 'Your  objective marks are : '.$objective_marks;
                $this->data['message'] = 'Result saved successfully!';
                //pre($aData);
                $this->response($this->data);exit;
              }
          }
      }
    public function ifAtempAlready()
      {
        $this->checkLogin();
        extract($_POST);
        if ($this->AM->verifyRequiredParams(array(
            "quiz_id"
        )))
          {
            $where            = array(
                'quiz_id' => $quiz_id,
                'user_id' => USER_ID
            );
			  if (checkExist('quize_attempted', $where) == 1)
              {
			$mydata = $this->db->where($where)->get('quize_attempted')->row();
			 $this->data['status'] = 204;
			  $total=(int) $mydata->objective_marks +(int) $mydata->long_questions_marks ;
			 $this->data['message'] = 'You already atempted this quize and Your marks  are: '.$total;
               $this->response($this->data);exit;
              }else{
				   $this->data['status'] = 200;

				  $this->data['message'] = 'You are giving this quiz first time, good luck';
                //pre($aData);
                $this->response($this->data);
				  }
			  
            
          }
      }



    /***********************************************************************/
	
	
    function saveSubscription()
      {
        extract($_POST);
        if ($this->AM->verifyRequiredParams(array(
            "txn_id",
            "email",
			"package_id",
            "amount"
        )) == true)
          {
		      $TransactionData      = array(
                    'email' => $email,
					'txn_id' => $txn_id,
					'amount' => $amount,
					'package_id' => $package_id,
                    'currency' => 'NGN',
                  	'paid' => 1,
                    'user_id' => USER_ID
                    
                );
                //$amount=$amount/100;
                /**************************send email to buyer ************************************/
				$userInfo =$this->getTokenEmailType(USER_ID);
                $buyerHtml .= 'Dear user<br>';
                $buyerHtml .= '<p>Thanks for your subscription you can now browse all course videos</p>';
                
                $buyerHtml .= '<br><br><br><br><a href="' . base_url() . '" target="_blank">Skillsquared Team </a>';
                $subjectLineBuyer = 'Subsription done on Zukulee LMS';
                	$this->crud->send_mail($userInfo->email,FROM,HEADING,$subjectLineBuyer,$buyerHtml);
                /*********************************************************************************/
          if ($this->db->insert('order_card_detail', $TransactionData))
                  {
                    $payment_id = $this->db->insert_id();
                   $this->data['status'] = 200;

				  $this->data['message'] = 'Thanks for your subscription you can now browse all course';
              $this->data['is_subscribed'] = true;
                $this->response($this->data);
                   
                  }
                else
                  {
                    $this->data['status'] = 204;
  $this->data['message'] = 'Subscription not done';
                $this->response($this->data);
                  }
		}
      }
    function validateCard()
      {
        extract($_POST);
        if ($this->AM->verifyRequiredParams(array(
            "card",
            "exp_month",
            "exp_year",
            "cvc",
			"package_id",
            "amount",

        )) == true)
          {
            require_once APPPATH . "third_party/stripe/init.php";
            \Stripe\Stripe::setApiKey(STRIPE_PUBLISH_KEY_TEST);
            try
              {
                $card                 = array(
                    "number" => $card,
                    "exp_month" => $exp_month,
                    "exp_year" => $exp_year,
                    "cvc" => $cvc
                );
                $charge               = \Stripe\Token::create(array(
                    "card" => $card
                ));
				if($charge->id!='' ){
                //$chargeJson           = $charge->jsonSerialize();
				$stripeToken=$charge->id;
				if($this->stripePayment($stripeToken, $amount,$package_id)){
                $chargeJson['status'] = 200;
				 $chargeJson['message'] = 'Congrats: you subscribed successfull';
                $chargeJson['is_subscribed'] = true;
                
                echo json_encode($chargeJson);
				}
				}
              }
            catch (Exception $e)
              {
                $response['message'] = $e->getMessage();
                $response['error']   = true;
                $response['status']  = 204;
                echo json_encode($response);
              }
          }
      }
    function dopayment()
      {
		  if(!isset($_POST['package_id'])){
			$_POST['package_id']=1;
			}
        extract($_POST);
		
        if ($this->AM->verifyRequiredParams(array(
            "card",
            "exp_month",
            "exp_year",
            "cvc",
			"package_id",
            "amount",

        )) == true)
          {
            require_once APPPATH . "third_party/stripe/init.php";
            \Stripe\Stripe::setApiKey(STRIPE_PUBLISH_KEY_TEST);
            try
              {
                $card                 = array(
                    "number" => $card,
                    "exp_month" => $exp_month,
                    "exp_year" => $exp_year,
                    "cvc" => $cvc
                );
                $charge               = \Stripe\Token::create(array(
                    "card" => $card
                ));
				if($charge->id!='' ){
                //$chargeJson           = $charge->jsonSerialize();
				$stripeToken=$charge->id;
				$this->stripePayment($stripeToken, $amount,$package_id);
				}
              }
            catch (Exception $e)
              {
                $response['message'] = $e->getMessage();
                $response['error']   = true;
                $response['status']  = 204;
                echo json_encode($response);exit;
              }
          }
      }

    function stripePayment($stripeToken, $amount,$package_id)
      {
        require_once APPPATH . "third_party/stripe/init.php";
        //pre($this->session);		//set api key
        extract($_POST); //set api key
        $stripe = array(

            "secret_key" => STRIPE_SECRETE_KEY_TEST,
            "publishable_key" => STRIPE_PUBLISH_KEY_TEST
        );
        \Stripe\Stripe::setApiKey(STRIPE_SECRETE_KEY_TEST);
        $orderNo = uniqid();
        try
          {
            $charge     = \Stripe\Charge::create(array(
                "amount" => $amount * 100,
                "currency" => "usd",
                "source" => $stripeToken,
                'description' => 'orderNo:' . $orderNo
            ));
            //retrieve charge details
            $chargeJson = $charge->jsonSerialize();
            //	$this->response($chargeJson);
            if (is_array($chargeJson) && $chargeJson['object'] == 'charge')
              {
                $amount               = $chargeJson['amount'] / 100;
                //	$array=array('status'=>1,'message'=>'Transaction has been successfull');
                // After successfull payment transaction save transaction and billing data	
                $TransactionData      = array(
                    'address_zip' => 0,
                    'address_zip_check' => 0,
                    'brand' => $chargeJson['source']['brand'],
                    'country' => $chargeJson['source']['country'],
                    'exp_month' => $chargeJson['source']['exp_month'],
                    'exp_year' => $chargeJson['source']['exp_year'],
                    'funding' => $chargeJson['source']['funding'],
                    'last4' => $chargeJson['source']['last4'],
                    'description' => $chargeJson['description'],
                    'currency' => $chargeJson['currency'],
                    'amount' => $amount,
                    'object' => $chargeJson['object'],
                    'paid' => $chargeJson['paid'],
                    'package_id' => $package_id,
                    'txn_id' => $chargeJson['id']
                );
                //$amount=$amount/100;
                /**************************send email to buyer ************************************/
/*				$userInfo =$this->getTokenEmailType(USER_ID);
                $buyerHtml .= 'Dear user<br>';
                $buyerHtml .= '<p>Thanks for your subscription you can now browse all coursed videos</p>';
                
                $buyerHtml .= '<br><br><br><br><a href="' . base_url() . '" target="_blank">Skillsquared Team </a>';
                $subjectLineBuyer = 'Subsription done on Zukulee LMS';
                	$this->crud->send_mail($userInfo->email,FROM,HEADING,$subjectLineBuyer,$buyerHtml);
*/                /*********************************************************************************/
          if ($this->db->insert('order_card_detail', $TransactionData))
                  {
                    $payment_id = $this->db->insert_id();
                    return 1;
                   
                  }
                else
                  {
                    return 0;
                  }
                     }
          }
        //catch exception
        catch (Exception $e)
          {
            $data['status']  = 204;
            $data['message'] = $e->getMessage();
            $this->response($data);
            exit;
          }
      }
    public function getTokenEmailType($id)
      {
        return $type = $this->db->select('device_id,devicetype,email')->from(TBL_USER)->where('id', $id)->get()->row();
      }
    /************send  push notificattion**********************/
    function send_android_notification($push_id, $message, $type = 'text', $badge = 0)
      {
        if ($type == 'message')
          {
            $type = 'text';
          }
        /*if($badge==0){
        
        $badge=$this->db->where(array('user_id'=>USER_ID,'read'=>0))->count_all_results('tbl_notify');
        
        }*/
        $registrationIds = array(
            $push_id
        );
        $data            = '';
        // prep the bundle 
        if (is_array($message))
          {
            $data = $message;
          }
        else
          {
            $data = array(
                'title' => 'Skillsquared',
                'message' => $message,
                'type' => $type,
                'badge' => $badge + 1,
                'vibrate' => 1
            );
          }
        $fields  = array(
            'registration_ids' => $registrationIds,
            'data' => $data
        );
        $headers = array(
            'Authorization: key=' . API_ACCESS_KEY,
            'Content-Type: application/json'
        );
        $ch      = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
        $result = curl_exec($ch);
        curl_close($ch);
        $res = array(
            'curlResponse' => $result,
            'data' => $data
        );
        return $res;
      }
    function send_ios_notification($push_id, $message, $type = 'text', $badge = 0)
      {
        if ($type == 'message')
          {
            $type = 'text';
          }
        /*if($badge==0){
        
        $badge=$this->db->where(array('user_id'=>USER_ID,'read'=>0))->count_all_results('tbl_notify');
        
        }*/
        $registrationIds = array(
            $push_id
        );
        $data            = '';
        // prep the bundle 
        if (is_array($message))
          {
            $data = $message;
          }
        else
          {
            $data = array(
                'title' => 'Pick4api',
                'body' => $message,
                'type' => $type,
                'sound' => 'Default',
                'vibrate' => 1
            );
          }
        $fields  = array(
            'registration_ids' => $registrationIds,
            'notification' => $data
        );
        $headers = array(
            'Authorization: key=' . API_ACCESS_KEY,
            'Content-Type: application/json'
        );
        $ch      = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
        $result = curl_exec($ch);
        curl_close($ch);
        $res = array(
            'curlResponse' => $result,
            'data' => $data
        );
        return $res;
      }
    public function testNotification()
      {
        extract($_GET);
        // My message
        $title = 'Zukulee Learning';
        if (isset($_GET['message']))
          {
            //do nothing
			$message =$_GET['message'];
          }
        else
          {
            $message = 'Test Notification  By waseem';
          }
        if (isset($_GET['deviceToken']))
          {
            //do nothing
			$deviceToken =$_GET['deviceToken'];
          }
        else
          {
            $deviceToken = '28d9a082b3b8e49317a57e7772ac8ef45d51918363557f88ea0f06a523855869';
          }
		    $notification = array('title' =>'Zukulee Test' , 'body' => $message, 'sound' => 'default', 'badge' => '1');
			 $payloadData = array(
 "senderName" => 'waseem',
 "senderImage" => 'https://p.kindpng.com/picc/s/78-786207_user-avatar-png-user-avatar-icon-png-transparent.png',
  "sender_id" => 18,
  "user_id" => 23,
  "time" => date('H:i a')
  
                ); 
			
    $arrayToSend = array('to' => $deviceToken,'data' => $payloadData, 'notification' => $notification,'priority'=>'high');
  
  $response['notification_object']=$arrayToSend;

        //$this->db->insert('tbl_notify',array('user_id'=>USER_ID,'body'=>$message,'read'=>0,'type'=>0));
        $res = $this->sendnoti($arrayToSend);
 $response['notification_response']=$res;
      
	  echo json_encode($res);
      }
    function _send_ios_notification($devicetoken, $messages, $badge = 0)
      {
        /*if($badge==0){
        
        $badge=$this->db->where(array('user_id'=>USER_ID,'read'=>0))->count_all_results('tbl_notify');
        
        }
        */
        $response   = array();
        $passphrase = '1234';
        $ctx        = stream_context_create();
        $pushserver = $this->db->select('pushserver')->from('setting')->where('id', 1)->get()->row()->pushserver;
        if ($pushserver == 1)
          {
            stream_context_set_option($ctx, 'ssl', 'local_cert', 'pems/Pick4DistributionPush.pem');
            $notificationUrl = 'ssl://gateway.push.apple.com:2195';
          }
        else
          {
            stream_context_set_option($ctx, 'ssl', 'local_cert', 'pems/Pick4DevelopmentPush.pem');
            $notificationUrl = 'ssl://gateway.sandbox.push.apple.com:2195';
          }
        stream_context_set_option($ctx, 'ssl', 'passphrase', $passphrase);
        stream_context_set_option($ctx, 'ssl', 'local_cert', 'certificates/development.pem');
        $notificationUrl = 'ssl://gateway.sandbox.push.apple.com:2195';
        // 
        // Open a connection to the APNS server
        $fp              = stream_socket_client($notificationUrl, $err, $errstr, 60, STREAM_CLIENT_CONNECT | STREAM_CLIENT_PERSISTENT, $ctx);
        if (!$fp)
            exit("Failed to connect: $err $errstr" . PHP_EOL);
        $response['connection'] = 'Connected to APNS' . PHP_EOL;
        // Create the payload body
        $body['aps']            = array(
            'alert' => $messages,
            'sound' => 'default',
            'badge' => $badge,
            'type' => 'Zukulee Learning'
        );
        // Encode the payload as JSON
        $payload                = json_encode($body);
        // Build the binary notification
        $msg                    = chr(0) . pack('n', 32) . pack('H*', $devicetoken) . pack('n', strlen($payload)) . $payload;
        // Send it to the server
        $result                 = fwrite($fp, $msg, strlen($msg));
        if (!$result)
            $response['response'] = 'Message not delivered' . PHP_EOL;
        else
            $response['notification'] = 'Message successfully delivered' . PHP_EOL;
        $response['response from apple'] = $result;
        // Close the connection to the server
        fclose($fp);
        return $response;
      }
    function getRatinglist()
      {
        $this->data['ratinglist'] = $this->db->query("SELECT u.name,CONCAT('" . base_url() . "uploads/',u.image) AS profilePic,r.rating,r.message FROM `rating` as r  JOIN users as u on u.id=r.user_id  WHERE r.restaurent_id='" . $_REQUEST['restaurent_id'] . "'")->result_array();
        $this->response($this->data);
      }
    function validateAccessToken($access_token)
      {
        $data = $this->db->query("SELECT user_id from " . $this->tbl_session . " where access_token='" . $access_token . "'");
        if ($data->num_rows() > 0)
          {
            return $data->row()->user_id;
          }
        else
          {
            $response["status"]  = 204;
            $response["error"]   = true;
            $response["message"] = "Please login to continue";
            echo json_encode($response);
            exit;
          }
      }
    public function addFriend()
      {
        $this->checkLogin();
        extract($_POST);
        if ($this->AM->verifyRequiredParams(array(
            "friend_id"
        )))
          {
            $_POST['user_id'] = USER_ID;
            $data            = array(
                'friend_id' => $friend_id,
                'user_id' => USER_ID
            );
            if (checkExist('friends', $data) == 1)
              {
                $this->error('Already friend!');
              }
            
            if ($this->db->insert('friends', $data))
              {
                $this->data['message'] = 'Added successfully!';
                //pre($aData);
                $this->response($this->data);
              }

          }
      }
    public function rateArestaurent()
      {
        $this->checkLogin();
        extract($_POST);
        if ($this->AM->verifyRequiredParams(array(
            "restaurent_id",
            "rating",
            "message"
        )))
          {
            $_POST['user_id'] = USER_ID;
            $where            = array(
                'restaurent_id' => $restaurent_id,
                'user_id' => USER_ID
            );
            if (checkExist('rating', $where) == 1)
              {
                $this->error('You already rated this restaurent');
              }
            if ($_POST['user_id'] == '')
              {
                $this->error('Access token is missing');
              }
            if ($this->db->insert('rating', $_POST))
              {
                $this->data['message'] = 'Thanks for your feedback';
                //pre($aData);
                $this->response($this->data);
              }
          }
      }
    public function helpcenter()
      {
        $this->checkLogin();
        extract($_POST);
        if ($this->AM->verifyRequiredParams(array(
            "message"
        )))
          {
            $_POST['user_id'] = USER_ID;
            if ($this->db->insert('helpcenter', $_POST))
              {
                $this->data['message'] = 'We have received your feedback our team will contact you as soon as possible.';
                $this->response($this->data);
              }
          }
      }
	  
    function checkLogin()
      {
        $header = $this->input->request_headers();
        if ($header['Accesstoken'] != '' OR $header['accesstoken'] != '')
          {
			
            return true;
          }elseif(defined('USER_ID')){
				
				return true;
			}
        else
          {
            $this->error('Access token is missing');
          }
      }
    function terms()
      {
        $termsData          = $this->db->select('post_description')->where('id', 3)->get('cms')->row()->post_description;
        $this->data['data'] = $termsData;
        $this->response($this->data);
      }
    public function error($message)
      {
        $response["status"]  = 204;
        $response["error"]   = true;
        $response["message"] = $message;
        echo json_encode($response);
        exit;
      }
    function response($response)
      {
        echo json_encode($response);
        exit;
      }
    public function setImg()
      {
        return "CONCAT('" . base_url() . "uploads/', image) as image";
      }
    ////////////////////////////// USER APIS START///////////////////////////////////    

   
   function ifSubscribedtrue($user_id){
	   $package=array();
	   $package['is_subscribed']=false;
	   $res=false;
	   $package['package']='No Subscription';
	   $data=$this->db->where('user_id',$user_id)->order_by("user_id","desc")->get('order_card_detail');
	   //lq();
	   if($data->num_rows()>0){
		   $row=$data->row();
		  $package =  $this->db->select('title as package')->where('id',$row->package_id)->get('membership_plans')->row()->package;
		   if ($row->created_on < strtotime('-30 days') and $row->package_id==1){
			   $res=true;
			   $package['is_subscribed']=true;
			   			   $package['package']=$package;
			   }
			    elseif ($row->created_on < strtotime('-120 days') and $row->package_id==2){
					$res=true;
		   $package['is_subscribed']=true;
			   			   			   $package['package']=$package;
			   }
			   elseif ($row->created_on < strtotime('-365 days') and $row->package_id==3){
			   $package['is_subscribed']=true;
			   			   			   $package['package']=$package;
			   
$res=true;
}
		   }
		   return $res;	   
	   }
   
    function print_error($message)
      {
        $response['status']  = 204;
        $response['message'] = $message;
        echo json_encode($response);
        exit;
      } 
    function updateProfile(){

			
if (!empty($_FILES['picture']['name'])){ 
					$config['upload_path']          = './uploads/';
					$config['allowed_types']        = ALLOWED_TYPES;
					$config['encrypt_name'] = TRUE;
					$this->load->library('upload');
					$this->upload->initialize($config);
					if (!$this->upload->do_upload('picture')){
						$arr['message']=$this->upload->display_errors();
						$this->AM->error($arr);
					
					}
					else{
					$upload_data = $this->upload->data();
					$_POST['image']= $upload_data['file_name'];
					}
					
					
				}
			
		$_POST['password'] = str_replace(' ','',$_POST['password']); 
		
        if (isset($_POST['password']) and $_POST['password'] != '' and  $_POST['password'] != NULL){
            $_POST['password'] = $this->hashPassword($_POST['password']);
          }else{
			  unset($_POST['password']);
		  }
        $this->db->where('id', USER_ID);
        if ($this->db->update('users',$_POST))
          {
            $this->data['message'] = 'Profile Updated!';
			
			$user              = $this->AM->getUserObject(USER_ID);
			
                    //removing password from response
                    unset($user['password']);
					$this->data['user']    =$user ;
          }
        else
          {
             $this->data['message'] = 'No New values(changes) to update!';
            
          }
		  $this->response($this->data);
      }
    function logout()
      {
        extract($_POST);
        $response = array();
        $where    = array(
            'user_id' => USER_ID
        );
        $result   = $this->db->where($where)->delete('app_user_session');
        if ($result)
          {
            $this->data['message'] = 'Logout  successfully!';
          }
        else
          {
            $this->data['message'] = 'Error! Unable to logout or already logout!';
          }
        $this->response($this->data);
      }
    function forgotPassword()
      {
        extract($_POST);
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|strip_tags');
        if ($this->form_validation->run() === false)
          {
            $error = strip_tags(validation_errors());
            $arr   = explode('.', $error);
            echo json_encode(array(
                'status' => 204,
                'error' => true,
                'message' => $arr[0]
            ));
            exit;
          }
        else
          {
            $key  = '';
            $arr  = array(
                'email' => $email
            );
            $data = $this->db->select('id,name')->where($arr)->get(TBL_USER);
            if ($data->num_rows() > 0)
              {
                $key    = $this->AM->randomKey(4);
                $string = $this->ion_auth->getForgot($key);
                $this->db->where('email', $email);
                if ($this->db->update('users', array(
                    'password' => $string
                )))
                  {
                    $this->load->library('email');
                    $config = Array(
                        'mailtype' => 'html',
                        'charset' => 'iso-8859-1',
                        'wordwrap' => TRUE
                    );
                    $this->email->initialize($config);
                    $body = '







                <h2>Dear ' . $data->row()->name . ' ,</h2><br><br>







                <p>Use <b>' . $key . '</b> as your one time password to login. You must have to change your password.<br></p><br><br>







                <a  href="#">Support Team Zukulee Learning</a>







                ';
                    $this->email->from('noreply@Zukulee Learning.com', 'Zukulee Learning  ');
                    $this->email->to($email);
                    $this->email->subject('PASSWORD RESET');
                    $this->email->message($body);
                    if ($this->email->send())
                      {
                        echo json_encode(array(
                            'status' => 200,
                            'error' => false,
                            'message' => "Instruction sent. Check your email !"
                        ));
                        exit;
                      }
                  }
              }
            else
              {
                $this->error('Email does not exist');
              }
          }
      }
	  
	  
/*
| -------------------------------------------------------------------
| CHAT APIS START HERE
| -------------------------------------------------------------------
*/
	
	
	
		
	 public function isConversationExist($owner_id,$reciever_id){
        $sql = "SELECT conversation_id FROM conversations WHERE (owner_id = '".$owner_id."' || receiver_id = '".$owner_id."') AND (receiver_id = '".$reciever_id."' || owner_id = '".$reciever_id."')";
        $data = $this->db->query($sql);        
        $exist = false;
        if ($data->num_rows()>0){
            $row = $data->row();
            $conversation_id = $row->conversation_id;           
            if(!empty($conversation_id)){
                $exist = true;
            }
        }
        return $exist;
    }
	 public function createConversation($owner_id,$reciever_id,$date=""){
        if(empty($date)){
            $date = date('Y-m-d H:i:s');
        }    
        $insert_id = 0;
        $result = false;       
        $query = $this->db->query("INSERT INTO conversations (`owner_id`,`receiver_id`,`modified`) values('".$owner_id."','".$reciever_id."','".$date."')");       
        if ($query){
            $insert_id = $this->db->insert_id();    
		}
        return $insert_id;
}
    
    public function getConversation($owner_id,$reciever_id){
     $sql = "SELECT conversation_id FROM conversations WHERE (owner_id = '".$owner_id."' || receiver_id = '".$owner_id."') AND (receiver_id = '".$reciever_id."' || owner_id = '".$reciever_id."')";
    //  echo   $sql;die('L');
        $data = $this->db->query($sql);  
           
        $conversation_id = 0;
         if ($data->num_rows()>0){
            $row = $data->row();
            $conversation_id = $row->conversation_id;        
        }
        return $conversation_id;
    }
    
	 public function getConversationById($conversation_id){
        $sql = "SELECT * FROM conversations  WHERE conversation_id = $conversation_id LIMIT 1";
        $data = $this->db->query($sql);      
        $conversation = array();
        if ($data->num_rows()>0){
           $conversation = $data->row();
        }
        return $conversation;
    }
	public function getMessages($user_id = 0,$conversation_id, $timezone = "UTC"){
        $sql = "SELECT m.*,u.image,u.name,m.user_id, message_id,m.conversation_id,m.status,m.deleted_by FROM messages as m INNER JOIN ".$this->tbl_user." as u ON u.id = m.user_id INNER JOIN conversations as c ON c.conversation_id = m.conversation_id  WHERE m.conversation_id = $conversation_id and m.status=0 ORDER BY m.date ";
        
        
         $data = $this->db->query($sql);   
        $messages = array();
        if ($data->num_rows()>0){
                      foreach($data->result() as $row){
                          
						  if($user_id > 0 && $user_id == $row->user_id){
								$message['body'] = $row->body;
								$message['conversation_id'] = $row->conversation_id;
								
								$message['name'] = $row->name;
								$message['message_id'] = $row->message_id;
								$message['user_id'] = $row->user_id;
								$message['image'] = base_url().'uploads/'.$row->image;
								$message['date'] = date("g:i a",strtotime($row->date)); ;
								$message['read'] = (int)$row->read;
								$message['is_owner'] = true;
								$message['status'] = (int)$row->status;
								$message['deleted_by'] =(int) $row->deleted_by;
						  
                    }else{
								$message['body'] = $row->body;
								$message['conversation_id'] = $row->conversation_id;
								$message['name'] = $row->name;
								$message['message_id'] = $row->message_id;
								$message['user_id'] = $row->user_id;
								$message['image'] = base_url().'uploads/'.$row->image;
								$message['date'] = date("g:i a",strtotime($row->date)); 
								$message['read'] = (int)$row->read;
								$message['is_owner'] = false;
								$message['status'] = (int)$row->status;
								$message['deleted_by'] =(int) $row->deleted_by;
                    }
                   // date_default_timezone_set($timezone);
                    //$message['date'] = date("m-d-Y h:i A");
                    $messages[] = $message;
						  }   
              
        }
        return $messages;
    }
     public function sendMessage($conversation_id,$user_id,$body,$date="",$type){
          
        $timezone='America/Toronto';
                         $date2 = new DateTime($row->date, new DateTimeZone($timezone) );
$date= $date2->format('Y-m-d H:i:s');
        $insert_id = 0;
        $result = false;
		$data=array(
		'conversation_id'=>$conversation_id,
		'user_id'=>$user_id,
		'body'=>$body,
		'type'=>$type,
		'date'=>$date
		);

		$query = $this->db->insert('messages',$data);
		if ($query){
            $insert_id = $this->db->insert_id();    
		}
        return $insert_id;
    }
	
	 public function getNotificationType($type){
        if(empty($type)){
            return "";
        }
		$messageText = "";

        $sql = "SELECT * FROM notification_types WHERE `type` = '".$type."' LIMIT 1";
		 $data = $this->db->query($sql);        
         if ($data->num_rows()>0){
            $row = $data->row();
            $messageText = $row->message;        
        }
        return $messageText;
    }
	public function getUserByUserId($user_id){
        $sql = "SELECT * FROM ".$this->tbl_user." WHERE id = $user_id LIMIT 1";
         $data = $this->db->query($sql);    
        if ($data->num_rows()>0){
            $row = $data->row();
           $userDetails = array(
            'name' => $row->name,
            'image' => base_url().'uploads/'.$row->image
        );      

        }else{
			 $userDetails = array(
            'name' => "",
            'image' => ""
        );
			}
        return $userDetails;
    }
    
    
 public function getDeviceId($user_id){
        $sql = "SELECT device_id FROM ".TBL_USER."  where ID =".$user_id;
        $data = $this->db->query($sql);        
        $device =0;
       if ($data->num_rows()>0){
		$device= $data->row()->device_id;
        }
        return $device;
    }

	 public function getUserDevices($user_id = 0){
        $sql = "SELECT device_id as push_id FROM ".TBL_USER." ";
        if(!empty($user_id)){
            $sql .= " WHERE user_id = $user_id ";
        }
        $data = $this->db->query($sql);        
        $devices = array();
       if ($data->num_rows()>0){
		   foreach($data->result() as $row){
			   $devices[] = $row->push_id;
			   }
        }
        return $devices;
    }
	public function getAllUnreadCount($user_id){
        $sql = "SELECT COUNT(m.message_id) as message_count FROM messages as m INNER JOIN ".$this->tbl_user." as u ON u.id = m.user_id INNER JOIN "
                . "conversations as c ON c.conversation_id = m.conversation_id WHERE (c.owner_id = $user_id OR c.receiver_id = $user_id) AND "
                . "m.user_id <> $user_id AND m.read = 0 ORDER BY m.message_id ASC";
        $data = $this->db->query($sql);  
        $message_count = 0;
        if ($data->num_rows()>0){
            $row = $data->row();
             $message_count = $row->message_count;
        }
        return $message_count;
    }
    
	public function getDeviceType($push_id){
        $sql = "SELECT * FROM user_devices WHERE push_id = '".$push_id."'LIMIT 1";
         $data = $this->db->query($sql);     
        $type = "android";
        if ($data->num_rows()>0){
            $row = $data->row();
            $type = $row->type;        
        }
        return $type;
    }
	
	public function setMessagesAsRead($conversation_id,$user_id){
        $sql = "UPDATE messages SET `read` = 1 WHERE conversation_id = '".$conversation_id."' AND user_id != '".$user_id."'";    
        $this->db->query($sql);        
    }
	
	/***********************************chat db function end ********************************************/
	
	public function chat(){

   extract($_POST);
$this->AM->verifyRequiredParams(array("message","receiverId"));
		$response=array();
	$response['status']=200;

		if(!isset($receiverId) OR empty($receiverId)){

			$errors[]='receiverId is not set or empty !';

		}
if(defined('USER_ID')){
	$user_id =USER_ID;
	}
   else{
			$this->error('Access token is missing');
			}
		

		

		

    // reading post params

    $reciever_id = $message_receiver = $receiverId;

    $response = array();

    $conversation_id = 0;

    if(!$this->isConversationExist($user_id, $reciever_id)){ 

      echo   $conversation_id = $this->createConversation($user_id, $reciever_id, $date);

	  

    }else{

        $conversation_id = $this->getConversation($user_id, $reciever_id);

    }



   

    if($conversation_id <= 0 || empty($conversation_id)){

        $response['error'] = false;

        $response['message'] = "Conversation could not be found due to invalid parameters";

       

    }

     if(empty($date)){

            $date = date('Y-m-d H:i:s');
         

        }  

    $message_id = $this->sendMessage($conversation_id, $user_id, $message,$date,$type='text');

    if($message_id > 0){

        $response['error'] = false;

        $response['message'] = "Message sent successfully";

        // update convesation time 

		$this->db->where('conversation_id',$conversation_id)->update('conversations',array('modified'=>$date));

		

        ///Send Notification to friend

        $messageText = $this->getNotificationType("message");

        if(!empty($messageText)){

            $user = $this->getUserByUserId($user_id);

            $userName = $user['name'];

            $image = $user['image'];

            $trimedMessage = substr($message, 0, 30);

            if(strlen($message) > 30){

                $trimedMessage .= "...";

            }

            $composedMessage = sprintf($messageText, $userName);

            $devices = $this->getDeviceId($message_receiver);
//pre($message_receiver);
            $unreadMessageCount = (int)$this->getAllUnreadCount($reciever_id);

            if(!empty($devices)){
 $payloadData = array(
 "senderName" => $user['name'],
 "senderImage" => $image,
  "sender_id" => $user_id,
  "user_id" => $user_id,
  "time" => date('H:i a')
  
                ); 

              

/*********************/		 
     $notification = array('title' =>$composedMessage , 'body' => $message, 'sound' => 'default', 'badge' => '1');
    $arrayToSend = array('to' => $devices,'data' => $payloadData, 'notification' => $notification,'priority'=>'high');
  $notiresponse = $this->sendnoti($arrayToSend);
  $response['notification_object']=$arrayToSend;
/**********************************/
				//pre($data);

           //$response['notiData']=     $this->send_android_notification($devices,$data,'text','');
       /*  $this->db->insert('notifications',array('body'=>$composedMessage,'resource_type'=>$resource_type,'resource_id'=>$message_id,'user_id'=>$receiverId));*/

            }

        }

		

       // $app->expires(time() - 86400);

		

		echo json_encode($response);



        

    } else {

        $response['error'] = false;

        $response['message'] = "Message could not be sent";

		

		echo json_encode($response);



    }

    

		

}




function sendnoti($array){
       $url = "https://fcm.googleapis.com/fcm/send";
   $serverKey = 'AAAAxvt5y-s:APA91bHgpPJ_E5nIvmO1WpmOO7qvz9YcCzIAaAJKqdjI-fZmYuc01FU0Ix6LNnHcK1SMtUyBqg4Q45fE2mv1pOFUkoAQo-yy6BYVJT-Bl6_zLpA8vsNDx3nFRcQOul82DT2SDxPOJAwO';
    $json = json_encode($array);
    $headers = array();
    $headers[] = 'Content-Type: application/json';
    $headers[] = 'Authorization: key='. $serverKey;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST,"POST");
            curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
        curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false );

    curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
    curl_setopt($ch, CURLOPT_HTTPHEADER,$headers);
    //Send the request
    $res = curl_exec($ch);
    if ($res === FALSE) {
    return 'FCM Send Error: ' . curl_error($ch);
    }else{
    curl_close($ch);
    return $json;
    }
}

/*

* messagess 

*/

public function messages(){
		extract($_POST);
		$response=array();
			$errors = array();
		$response['status']=200;
		$this->AM->verifyRequiredParams( array(
             "receiverId",
            "timezone"
        )) ;


	
	// chekc if conversation exist 
	
   
    $reciever_id =$_POST['receiverId']; 
    
    $timezone =$_POST['timezone']; 
if(defined('USER_ID')){
	$user_id =USER_ID;
	}
   else{
			$this->error('Access token is missing');
			}
   
        if(!$this->isConversationExist($user_id, $reciever_id)){
            $conversation_id = $this->createConversation($user_id, $reciever_id);
        }else{
            $conversation_id = $this->getConversation($user_id, $reciever_id);
        }
   
    $response = array();
    if(empty($conversation_id)){
        $response["error"] = false;
        $response["messages"] = 'Required field(s) conversationId is missing or empty';
		echo json_encode($response);
        exit;
    }
    
    
    // updating activity request
    $messages = $this->getMessages($user_id,$conversation_id,$timezone);
    $conversation = $this->getConversationById($conversation_id);
    $this->setMessagesAsRead($conversation_id,$user_id);
    if(!empty($conversation)){
        $response["conversation_id"] = $conversation_id;
        if($conversation->owner_id== $user_id){
            $response["user_id"] = $conversation->receiver_id;
            $user = $this->getUserByUserId($conversation->receiver_id);
           
            $response["user_image"] = $user['image'];
            $response["user_name"] = $user['name'];           
            $response["is_owner"] = true;
        }else{
            $response["user_id"] = $conversation->owner_id;
            $user = $this->getUserByUserId($conversation->owner_id);
            
            $response["user_image"] = $user['image'];
            $response["user_name"] = $user['name'];
            $response["is_owner"] = false;

        }
    }
    
    if(!empty($messages)){
        $response["status"] = 200;
        $response["messages"] = $messages;
		echo json_encode($response);
       
    }else{

       
        $response["messages"] = array();
		echo json_encode($response);
        
    }
    
	
}

/***********************************************************************************/
/***
 * Send online or offline status
 * method post
 * url /whipser
 * @param status (0 or 1)
 */  
public function whisper(){
    
   $status = $_POST['status']; 
   $user_id = $_POST['user_id']; 
    $response = array();
    if(empty($status)){
        $status = 204;
    }
    $whisper = $this->whisper_update($user_id, $status);
    if($whisper){
        $response['error'] = false;
        $response['message'] = "Your status has been updated.";                
       
    }else{
        $response['error'] = false;
        $response['message'] = "Unable save your status";
       
    }

	echo json_encode($response);
	
	}

    public function whisper_update($user_id,$status = 1){
        $whisper = $this->getItemByType("whispers","user_id",$user_id);
        $date = date("Y-m-d h:i:s");
        if(empty($whisper)){
            $sql = "INSERT INTO whispers (user_id, date, status) VALUES ( '".$user_id."', '".$date."','". $status."')";
            $stmt = $this->db->query($sql);
            if($stmt){
                return true;
            }
            return false;
        }
        $sql = "UPDATE whispers SET status = $status, date = '$date' WHERE user_id = $user_id";
        $this->db->query($sql);
        return true;

    }
	
	  public function getItemByType($table,$primary,$id){
        $data = $this->db->query("SELECT * FROM $table WHERE $primary = $id");
        $item = array();
       if ($data->num_rows()>0){
            $item = $data->row();   
        }        
        return $item;
    }

	
	
    
  
/*******get messages end **********************************/

public function  onlineusers(){
	 $response["status"] = 200;
	 $response["users"]=array();
	 
if(defined('USER_ID')){
	$user_id =USER_ID;
	}
   else{
			$this->error('Access token is missing');
			}
 	$q="SELECT u.id as user_id,c.modified, u.name,u.email as email,u.image,u.bio,u.online as active,
	u.device_id as push_id  FROM ".$this->tbl_user." as u  
	 left outer join conversations as c on u.id=c.owner_id or u.id=c.receiver_id 
where u.id!='".$user_id."'   group by u.id order by c.modified asc ";
	$data = $this->db->query($q);

	if ($data->num_rows()>0){
		  $response["status"] = 200;
	foreach($data->result() as $row){
		 $response["users"][] = array(
            'user_id' => $row->user_id,
            'is_friend' =>$this->is_friend($row->user_id),
			'name' => $row->name,
            'email' => $row->email,
			'bio' => $row->bio,
            'image' => base_url().'uploads/'.$row->image,
            'active' => $row->active,
            'push_id' => $row->push_id
        );
		}
	}else{
	  $response["status"] = 204;
	}
	
	echo json_encode($response);

}


public function  searchUsers(){
	 $response["status"] = 200;
	 $response["users"]=array();
	 
if(defined('USER_ID')){
	$user_id =USER_ID;
	}
   else{
			$this->error('Access token is missing');
	
		}
		

$this->AM->verifyRequiredParams(array(
            "name"
        ));
extract($_POST);
		
 	$q="SELECT u.id as user_id,c.modified, u.name,u.email as email,u.image,u.bio,u.online as active,
	u.device_id as push_id  FROM ".$this->tbl_user." as u  
	 left outer join conversations as c on u.id=c.owner_id or u.id=c.receiver_id 
where u.id!='".$user_id."' and u.name like '%".$name."%'   group by u.id order by c.modified asc ";
	$data = $this->db->query($q);

	if ($data->num_rows()>0){
		  $response["status"] = 200;
	foreach($data->result() as $row){
		 $response["users"][] = array(
            'user_id' => $row->user_id,
            'is_friend' =>$this->is_friend($row->user_id),
			'name' => $row->name,
            'email' => $row->email,
			'bio' => $row->bio,
            'image' => base_url().'uploads/'.$row->image,
            'active' => $row->active,
            'push_id' => $row->push_id
        );
		}
	}else{
	  $response["status"] = 204;
	}
	
	echo json_encode($response);

}


public function  is_friend($fid){
	if(checkExist('friends',array('friend_id'=>$fid,'user_id'=>USER_ID))){
		return true;
		}else{
			return false;
			}
	}
public function  _getFriends(){
	 $response["status"] = 200;
	 $response["users"]=array();
	 
if(defined('USER_ID')){
	$user_id =USER_ID;
	}
   else{
			$this->error('Access token is missing');
			}
 	$q="SELECT u.id as user_id,c.modified, u.name,u.email as email,u.image,u.bio,u.online as active,
	u.device_id as push_id  FROM ".$this->tbl_user." as u  
	
	 left outer join conversations as c on u.id=c.owner_id or u.id=c.receiver_id 
	 join friends as f on f.friend_id=u.id
where u.id!='".$user_id."' and f.user_id ='".USER_ID."' group by u.id order by c.modified asc ";
	$data = $this->db->query($q);

	if ($data->num_rows()>0){
		  $response["status"] = 200;
	foreach($data->result() as $row){
		 $response["users"][] = array(
            'user_id' => $row->user_id,
'name' => $row->name,
            'email' => $row->email,
            'bio' => $row->bio,
            'image' => base_url().'uploads/'.$row->image,
            'active' => $row->active,
            'push_id' => $row->push_id
        );
		}
	}else{
	  $response["status"] = 204;
	}
	
	echo json_encode($response);

}


 	 public function getConversations(){
		extract($_POST);
		
		$response=array();
		$errors = array();
		$response['status']=200;
		
        $sql = "SELECT * FROM conversations as c WHERE c.owner_id = $user_id OR c.receiver_id = $user_id".
                " GROUP BY c.conversation_id"
                ;
        
        if(!empty($conversation_id)){
            $sql = "SELECT * FROM conversations as c WHERE c.conversation_id = $conversation_id AND (c.owner_id = $user_id OR c.receiver_id = $user_id)".
                " GROUP BY c.conversation_id"
                ;
        }
        
        $data = $this->db->query($sql);        
        $conversations = array();
		
        if ($data->num_rows()>0) {
            
			
			foreach($data->result() as $row){
				 $conversations[] = $row;
				
			}
            
        }
		//pre($conversations);
        foreach ($conversations as $key => $conversation){
			    $conversation_id = $conversation->conversation_id; 
            $owner_id = $conversation->owner_id;
            $receiver_id = $conversation->receiver_id;            
            if($owner_id == $user_id){

                $owner = $this->getUserById($owner_id);
                $receiver = $this->getUserById($receiver_id);
				
				
                $conversations[$key]->avatar_owner =base_url().'uploads/'. $owner->image;
                
                $conversations[$key]->name_owner = $owner->name;
                $conversations[$key]->avatar_receiver =base_url().'uploads/'. $receiver->image;
                $conversations[$key]->name_receiver = $receiver->name;
                $conversations[$key]->is_owner = true;
                $conversations[$key]->is_online = $this->isUserOnline($receiver_id);
            }else{
                $owner = $this->getUserById($receiver_id);
                $receiver = $this->getUserById($owner_id); 
				$conversations[$key]->receiver_id = $owner_id;
				$conversations[$key]->owner_id = $receiver_id;
                $conversations[$key]->avatar_owner = base_url().'uploads/'.$owner->image;
                $conversations[$key]->name_owner = $owner->name;
                $conversations[$key]->avatar_receiver =base_url().'uploads/'. $receiver->image; 
                $conversations[$key]->name_receiver = $receiver->name;
                $conversations[$key]->is_owner = false;
                $conversations[$key]->is_online = $this->isUserOnline($receiver_id);
            }
            $sql2 = "SELECT * FROM  messages WHERE conversation_id = $conversation_id and status=0 ORDER BY message_id DESC LIMIT 1";
            $stmt2 = $this->db->query($sql2);     
            if ($stmt2->num_rows()>0) { 
                $message = $stmt2->row();
				
                        $conversations[$key]->message = $message->body;
                        $conversations[$key]->date = $message->date;
                    $conversations[$key]->read = $message->read;
$conversations[$key]->UnreadCount =(int)$this->getAllUnreadCount($user_id);
;


                   
            }else{
				  $conversations[$key]->message = "";
                        $conversations[$key]->date = "";
			}
        }
       echo json_encode($conversations);
    }

public function getUserById($user_id){
        $sql = "SELECT * FROM ".$this->tbl_user." WHERE ID = '".$user_id."' LIMIT 1";
        $stmt = $this->db->query($sql);     
        $userDetails = array(
            'name' => "",
            'avatar' => ""
        );
        if ($stmt) {
          $user = $stmt->row();    
                if(!empty($user)){
                    $userDetails = $user;
                }
        }
        return $userDetails;
    }



/****/

public function timezones(){
    $response = array();
   $response["status"] = 200;
    $response["timezones"] = array(
        'US/Pacific' => '(UTC-8) Pacific Time (US & Canada)',
        'US/Mountain' => '(UTC-7) Mountain Time (US & Canada)',
        'US/Central' => '(UTC-6) Central Time (US & Canada)',
        'US/Eastern' => '(UTC-5) Eastern Time (US & Canada)',
        'America/Halifax' => '(UTC-4)  Atlantic Time (Canada)',
        'America/Anchorage' => '(UTC-9)  Alaska (US & Canada)',
        'Pacific/Honolulu' => '(UTC-10) Hawaii (US)',
        'Pacific/Samoa' => '(UTC-11) Midway Island, Samoa',

        'Etc/GMT-12' => '(UTC-12) Eniwetok, Kwajalein',
        'Canada/Newfoundland' => '(UTC-3:30) Canada/Newfoundland',
        'America/Buenos_Aires' => '(UTC-3) Brasilia, Buenos Aires, Georgetown',
        'Atlantic/South_Georgia' => '(UTC-2) Mid-Atlantic',
        'Atlantic/Azores' => '(UTC-1) Azores, Cape Verde Is.',
        'Europe/London' => 'Greenwich Mean Time (Lisbon, London)',
        'Europe/Berlin' => '(UTC+1) Amsterdam, Berlin, Paris, Rome, Madrid',
        'Europe/Athens' => '(UTC+2) Athens, Helsinki, Istanbul, Cairo, E. Europe',
        'Europe/Moscow' => '(UTC+3) Baghdad, Kuwait, Nairobi, Moscow',
        'Iran' => '(UTC+3:30) Tehran',
        'Asia/Dubai' => '(UTC+4) Abu Dhabi, Kazan, Muscat',
        'Asia/Kabul' => '(UTC+4:30) Kabul',
        'Asia/Yekaterinburg' => '(UTC+5) Islamabad, Karachi, Tashkent',
        'Asia/Calcutta' => '(UTC+5:30) Bombay, Calcutta, New Delhi',
        'Asia/Katmandu' => '(UTC+5:45) Nepal',
        'Asia/Omsk' => '(UTC+6) Almaty, Dhaka',
        'Indian/Cocos' => '(UTC+6:30) Cocos Islands, Yangon',
        'Asia/Krasnoyarsk' => '(UTC+7) Bangkok, Jakarta, Hanoi',
        'Asia/Hong_Kong' => '(UTC+8) Beijing, Hong Kong, Singapore, Taipei',
        'Asia/Tokyo' => '(UTC+9) Tokyo, Osaka, Sapporto, Seoul, Yakutsk',
        'Australia/Adelaide' => '(UTC+9:30) Adelaide, Darwin',
        'Australia/Sydney' => '(UTC+10) Brisbane, Melbourne, Sydney, Guam',
        'Asia/Magadan' => '(UTC+11) Magadan, Solomon Is., New Caledonia',
        'Pacific/Auckland' => '(UTC+12) Fiji, Kamchatka, Marshall Is., Wellington',
    );
    
    foreach ($response["timezones"] as $key => $value){
        $response["android"][] = array(
            'key' => $key,
            'value' => $value
        );
    }
    echo json_encode($response);
	}

	/*******************devices**************/
	
	public function addDevice($user_id,$push_id,$push_type){
        if(empty($user_id) || empty($push_id)){
            return;
        }
        if(empty($push_type)){
            $push_type = "android";
        }
        if($this->deviceExist($user_id, $push_id)){
            $this->updateDeviceStatus($user_id,$push_id,1);
            return;
        }
        
        $result = $this->db->query("INSERT INTO user_devices(user_id, push_id, type) values('".$user_id."', '".$push_id."', '".$push_type."')");
        return $result;
    }
    
    public function deviceExist($user_id,$push_id){
        $sql = "SELECT * FROM user_devices WHERE user_id = $user_id AND push_id = '".$push_id."'LIMIT 1";
        $query = $this->db->query($sql);     
        $exists = false;
        if ($query->num_rows() > 0){
           $exists = true;
        }
        return $exists;
    }
    public function updateDeviceStatus($user_id,$push_id,$deviceStatus){
        $sql = "UPDATE user_devices SET `active` = $deviceStatus WHERE user_id = $user_id AND `push_id` = '$push_id'";    
        $result = $this->db->query($sql);    
        $status = false;
        if($result){
            $status = true;
        } 
        return $status;
    }
	 public function isUserOnline($user_id){
        $whisper = $this->getItemByType("whispers","user_id",$user_id);
        if(empty($whisper) || empty($whisper->status)){
            return false;
        }
        return $whisper->active;
    }
	/*-------------------- 
	|CHAT APIS END 
	|---------------------
	*/	
	  
	  
	  
	  
	  
  }



