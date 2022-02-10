<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {


	  
	  function __construct()
	{
		parent::__construct();
			 define('IMG', base_url() . 'uploads/');
	}
	
	
	public function login(){
		
$aData['page_title'] ='login';
		$this->load->view('login',$aData);
	}

	public function learn(){
			
	$aData['page_title'] ='Learn Findmaids';
			$this->load->view('learn-more',$aData);
		}
	public function pdfreader($id){
	$id=	base64_decode($id);
	$query =$this->crud->edit($id,'library_management');

		$aData['book']=$query;
		$cat_id=$query->cat_id;
				$aData['books'] =$this->db->where(array('status'=>1,'cat_id'=>$cat_id))->get('library_management');

	$aData['page_title'] ='Pdf reader';
			$this->load->view('pdfreader',$aData);
		}
	public function faq(){
		
$aData['page_title'] ='FAQ';
$aData['data'] =$this->db->query('SELECT f.* FROM `faqs` as f');
		$this->load->view('faqs',$aData);
	}
	public function about(){
		
$aData['page_title'] ='About us';

		$this->load->view('about');
	}
	public function instructors(){
		
$aData['page_title'] ='About instructors';
$aData['instructors'] =$this->db->select("u.id,u.name,u.email,u.phone,u.address,u.designation,u.description,subject.title as assignedSubject,CONCAT('".IMG."',u.image) as image")
->from('users as u')
->join('course_categories as subject','subject.id=u.subject_id')->get();
		$this->load->view('instructor',$aData);
	}
	public function coursesList(){
		//pre($this->session->userdata());
	$class_id=	$this->getUserClass($this->session->userdata('user_id'));
$aData['page_title'] ='coursesList';
			$aData['courses'] = $this->db->where('classid',$class_id)->get('getcourse');

		$this->load->view('courses-list',$aData);
	}
	
	function getUserClass($user_id){
	return 	$this->db->select('class_id')->where('id',$user_id)->get(TBL_USER)->row()->class_id;
		}
	
	public function coursesDetail($id){
	//	pre($this->session->userdata());
	$id=	base64_decode($id);
$aData['page_title'] ='Courses Detail';
			$query = $this->db->where(array('course_id'=>$id))->get('getsinglecourse');
			if($query->num_rows()>0){
				$aData['row'] =$query->row();
				// get lectures of the course
				$aData['lectures']  = $this->db->where(array('course_id'=>$id,'status'=>1))->get('course_lectures');
				$aData['lecturevideos']  = $this->getsavedlectures($id);
			
				}
	//		$aData['row'] = $this->db->where(array('course_id'=>$id))->get('getsinglecourse')->row();

		$this->load->view('single-courses',$aData);
		/*
		select `c`.`id` AS `course_id`,`cl`.`class_name` AS `class_name`,`cc`.`title` AS `subjects`,`u`.`name` AS `trainerName`,`u`.`image` AS `trainerImage`,`c`.`post_title` AS `courseTitle`,`c`.`price` AS `price`,`c`.`thumbnail` AS `thumbnail` from ((( `course` `c` join  `course_categories` `cc` on(`cc`.`id` = `c`.`course_category_id`)) join  `users` `u` on(`u`.`subject_id` = `c`.`course_category_id`)) join  `classes` `cl` on(`cl`.`id` = `c`.`class_id`))
		
		create view getsinglecourse as SELECT c.id as course_id, cl.class_name, cc.title as subjects,c.post_title as courseTitle,c.price,
c.short_description,c.terms,
c.post_description,
c.created_on,
c.video_url,
c.thumbnail,
u.name as trainerName,
u.image as trainerImage,
u.designation as trainerDesignation,
u.description as trainerDescription,
(SELECT COUNT(id) FROM course_lectures WHERE course_id=c.id ) as lesseonsCount
FROM `course` as c 
JOIN  course_categories as cc on cc.id=c.course_category_id
JOIN  users as u on u.subject_id=c.course_category_id
JOIN  classes as cl on cl.id=c.class_id
		*/
	}
	
		 public function  getsavedlectures($course_id)

	        {

			   
				$data =   $this->db->query(

				"SELECT cl.id as course_lecture_id,cl.title as course_lecture_title,cld.title as lecture_video_title,cld.duration as lecture_video_duration,cld.video as lecture_video,

				cld.id as course_lectures_detail_id  

				FROM `course_lectures` AS cl

				INNER JOIN `course_lectures_detail` AS cld

				ON  cl.id = cld.course_lectures_id

				WHERE cl.course_id = ".$course_id."");

				if(!empty($data->result()))

				{

					$alist = array();

					foreach ($data->result() as $row)

					{

					    $course_lecture_title_and_id  =  $row->course_lecture_title.'=>'.$row->course_lecture_id;

						$alist[ $course_lecture_title_and_id ]['title'][] = $row->lecture_video_title;

						$alist[ $course_lecture_title_and_id ]['duration'][] = $row->lecture_video_duration;

						$alist[ $course_lecture_title_and_id ]['video'][] = $row->lecture_video;

						$alist[ $course_lecture_title_and_id ]['id'][] = $row->course_lectures_detail_id;

						

					

					}

				

				if(count($alist) > 0)

				{	

					$courselecturelist = '';

					$courselecturelist .='<ul class="accordion">';

						$lectureNo=1;

					 foreach($alist as $coursetitle =>$coursedetail):

					   	

						if(!empty($coursetitle)):

						   

						  $acourselecturedata = explode('=>',$coursetitle);

						     $courselecturetitle  = $acourselecturedata [0];

							  $courselectureid  = $acourselecturedata [1];

						   $courselecturelist .='<li id="lec_wrap_'.$courselectureid.'">';

						    $courselecturelist .='<span id="on_edit_lec_title_'.$courselectureid.'" style="display:none;">'.$courselecturetitle.'</span>'; 

							$courselecturelist .='<b> </b><a class="toggle" href="javascript:void(0);"><strong>'.$courselecturetitle.'</strong></a> 

							<a class="toggle" href="javascript:void(0);"  onclick="edit_lecture(\'' . $courselectureid . '\')">

							 <i class="fa fa-pencil"></i>

							</a>

							

							 <a class="toggle" href="javascript:void(0);"  onclick="delete_lecture(\'' . $courselectureid . '\')">

							   <i class="fa fa-trash"></i>

							 </a>

							';

							

							

							$courselecturelist .='<ul class="inner">';

							$video=1;

							for($index = 0 ; $index < count($coursedetail['title']); $index ++):

							    $id  = $coursedetail['id'][$index];
if($index>0){
	if(get_session('is_subscribed')==0){
		
		$courselecturelist .='<li style="margin-left:5px;color:#000;" id="list_'.$id.'">

								    <a href="javascript:void(0)">'.$video.': '.ucfirst($coursedetail['title'][$index]).'</a>&nbsp;

								   

									<span class="pull-right">

										<a class="btn btn_play btn-info" data-toggle="modal" data-target="#exampleModal"style="background-color:#999"  href="javascript:void(0);"   title="Play"> Play

										<span class="bx bx-play-circle"></span></a>&nbsp; </span>

								  

								  </li> <div class="rowEnd"></div>';

		}else{
		///////
		$courselecturelist .='<li style="margin-left:5px;color:#000;" id="list_'.$id.'">

								    <a href="javascript:void(0)">'.$video.': '.ucfirst($coursedetail['title'][$index]).'</a>&nbsp;

								   

									<span class="pull-right">

										<a class="btn btn_play btn-info"  href="javascript:void(0);"  onclick="preview_video(\'' . $id . '\')" title="Play"> Play

										<span class="bx bx-play-circle"></span></a>&nbsp; </span>

								  

								  </li> <div class="rowEnd"></div>';
		}
		}else{
		///////
		$courselecturelist .='<li style="margin-left:5px;color:#000;" id="list_'.$id.'">

								    <a href="javascript:void(0)">'.$video.': '.ucfirst($coursedetail['title'][$index]).'</a>&nbsp;

								   

									<span class="pull-right">

										<a class="btn btn_play btn-info"  href="javascript:void(0);"  onclick="preview_video(\'' . $id . '\')" title="Play"> Play

										<span class="bx bx-play-circle"></span></a>&nbsp; </span>

								  

								  </li> <div class="rowEnd"></div>';
		}
								

								  $courselecturelist .='<span id="cvideo_'.$id.'" style="display:none;">'.$coursedetail['video'][$index].'</span>';

								  $video++;

							endfor;

							$courselecturelist .='</ul>';

						$courselecturelist .='</li>';

						endif;

						$lectureNo++;

					endforeach;	

					$courselecturelist .='</ul>';

				}

			  return  $courselecturelist;	

			  

			}

			else

			{

			return 0 ;	

			}

		}
	
	
	public function bookcategories(){
		
$aData['page_title'] ='library';
$aData['books'] =$this->db->get('bookcategories');

		$this->load->view('bookcategories',$aData);
	}

	public function library($id){
		$id=	base64_decode($id);
$aData['page_title'] ='library';
$aData['books'] =$this->db->where(array('status'=>1,'cat_id'=>$id))->get('library_management');

		$this->load->view('library',$aData);
	}

	
	
	public function contact(){
		
		$this->load->view('contact');
	}
	
	public function packages(){
	$aData['PublishingPackages']=	$this->db->query("SELECT p.id as package_id,p.product_name as package,p.product_price as price,CONCAT(('".IMG."'),(''),(pi.image)) as image FROM `product` as p
join product_images as pi on pi.product_id=p.id and p.package_type='Publishing'  order by p.product_price ASC")->result_array();
	$aData['MarketingPackages']=	$this->db->query("SELECT p.id as package_id,p.product_name as package,p.product_price as price,CONCAT(('".IMG."'),(''),(pi.image)) as image FROM `product` as p
join product_images as pi on pi.product_id=p.id and p.package_type='Marketing' ")->result_array();
		$this->load->view('packages',$aData);
	}
	public function packageDetail($id){
	$aData['row']=	$this->db->query("SELECT p.id as package_id,p.product_name as package,p.product_description as description,p.product_price as price,CONCAT(('".IMG."'),(''),(pi.image)) as image FROM `product` as p
join product_images as pi on pi.product_id=p.id and p.id=".$id)->row();
	$aData['package_id']=$id;
		$this->load->view('packages-detail',$aData);
	}
	





	
	
}
