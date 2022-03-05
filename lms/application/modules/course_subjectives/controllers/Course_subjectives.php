<?php

 

 defined('BASEPATH') OR exit('No direct script access allowed');



 class Course_subjectives extends MX_Controller {

	

	public function __construct(){

		parent::__construct();

		if(!$this->session->userdata('login')==true){

			redirect('auth/login', 'refresh');

		}

	}

	public $view = "view";

	public $tbl = 'course_subjectives';

	public $course_lectures_detail = 'course_lectures_detail';

	public $course_lectures = 'course_lectures';

	public $tbl_course_objectives_options = 'course_objectives_options';

	public $course_category = 'course_categories';

	public $tbl_classes = 'classes';

	

	

	

	public function index(){  



		$aData['data'] = $this->db->query("SELECT p.* FROM ".$this->tbl." p ");

		$this->load->view($this->view,$aData);

	}

	public function view($course_id,$quiz_id){  
	$aData['course_id'] =$course_id;
	$aData['quiz_id'] =$quiz_id;
	$aData['course_title'] =$this->db->select('post_title')->from('course')->where('id',$course_id)->get()->row()->post_title;
	
	$aData['data'] = $this->db->query("SELECT p.* FROM ".$this->tbl." p  where p.quiz_id='".$quiz_id."'");
			$this->load->view($this->view,$aData);
	}

	public function add($course_id=0,$quiz_id=0){ 
	if($quiz_id==0){
		echo 'quiz_id id is missing';exit;
		} 
 $aData['quiz_id'] =$quiz_id;
 $aData['course_id'] =$course_id;
	   
		$this->load->view('save',$aData); 

	}

	public function edit($id){

		$query = $this->crud->edit($id,$this->tbl);

		$rows = $query;

		$aData['course_catogories'] = $this->db->select('id,title ')->from($this->course_category)->order_by("id","asc")->get(); 

		$aData['option_list'] = $this->db->select('*')->from($this->tbl_course_objectives_options)->where('question_id ',$rows->id )->order_by("id","asc")->get();

		

		$aData['row'] = $query;

		$this->load->view('save',$aData);

	}

	public function delete(){ 

		extract($_POST);

		$result =$this->crud->delete($id,$this->tbl);

		switch($result){

			case 1:

			$arr = array('status' => 1,'message' => "Deleted Succefully !");

			echo json_encode($arr);

			break;

			case 0:

			$arr = array('status' => 0,'message' => "Not Deleted!");

			echo json_encode($arr);

			break;

			default:

			$arr = array('status' => 0,'message' => "Not Deleted!");

			echo json_encode($arr);

			break;	

		}

	}

	

	function save(){ 
		extract($_POST);
		if($_POST['id']==''){
		if(checkExist($this->tbl,array('title'=>$title))){
			$arr = array("status"=>0 ,"message"=> 'This question already exiest');
			echo json_encode($arr);exit;
			}
		}
		$this->load->library('form_validation');
		if($_POST['id']==''){
		$this->form_validation->set_rules('quiz_id', 'quiz id', 'trim|required');
		}
		$this->form_validation->set_rules('title', 'Question', 'trim|required');
		if ($this->form_validation->run()==false){
			$arr = array("status"=>"validation_error" ,"message"=> validation_errors());
			echo json_encode($arr);
		}
		else{


		$PrimaryID = $_POST['id'];
		$result = $this->crud->saveRecord($PrimaryID,$_POST,$this->tbl);
		switch($result){
			case 1:
			$arr = array('status' => 1,'message' => "Inserted Succefully !");
			echo json_encode($arr);
			break;
			case 2:
			$arr = array('status' => 2,'message' => "Updated Succefully !");
			echo json_encode($arr);
			break;
			case 0:
			$arr = array('status' => 0,'message' => "Not Saved!");
			echo json_encode($arr);
			break;
			default:
			$arr = array('status' => 0,'message' => "Not Saved!");
			echo json_encode($arr);
			break;	
		}

	   }	

	}

	  

		// save lecture

		

		public function savelecture()

		{

		   

				extract($_POST);

				

				if($this->input->post('process')=='edit')

				 {

					 

					

					$data = array('title'=>$lec_title ,'updated_on'=>NOW);

					$this->db->where('id', $course_lecture_id);

					if ($this->db->update($this->course_lectures , $data))

					{

						$result = 1;

					}

					

					

					if(isset($_POST['title']))

					{

						for($index = 0 ; $index < count($_POST['title']); $index ++)

						{

							if(!empty($_POST['title'] ))

							{

								$updateData = array(

								'course_lectures_id'=>$course_lecture_id ,

								'title'=>$_POST['title'][$index] ,

								'duration'=>$_POST['duration'][$index] ,

								);

								$this->db->where('unique_id', $_POST['unique_id'][$index]);

								$this->db->update('course_lectures_detail', $updateData); 

							}

						}

					}

						

					if($result)

					{

					  $arr = array('status' => true,'message' => "Lecture detail has been updated successfully..!");

					  echo json_encode($arr);

					  exit;  	

					}

						

				 

				 }

				 else

				 {

				 if($this->input->post('process')=='done')

				  {

					

					$data = array('course_id'=>$course_id ,'title'=>$lec_title ,'added_on'=>NOW);

					

					if ($this->db->insert('course_lectures', $data))

					{  

						$lecture_id =  $this->db->insert_id();

						$result = 1;

					}

					

					if(isset($_POST['title']))

					{

						for($index = 0 ; $index < count($_POST['title']); $index ++)

						{

							if(!empty($_POST['title'] ))

							{

								$updateData = array(

									'course_lectures_id'=>$lecture_id ,

									'title'=>$_POST['title'][$index] ,

									'duration'=>$_POST['duration'][$index] ,

								);

								$this->db->where('unique_id', $_POST['unique_id'][$index]);

								$this->db->update('course_lectures_detail', $updateData); 

							}

						}

					}

					

					if($result)

					{

					$arr = array('status' => true,'message' => "Lecture detail has been saved..!");

					echo json_encode($arr);

					exit;  	

					}

					

				 }

				 else

				 {

				

					$targetDir = "./uploads/lectures/";

					$makeindex = 0;

					if($_POST['unique_id'])

					{

						$aUniquecount  = count($_POST['unique_id']);

						$makeindex = $aUniquecount -1;   	

					}

					

					$fileName = $_POST['unique_id'][$makeindex].'_'.$_FILES['file']['name'];

					$targetFilePath = $targetDir.$fileName;

					if(move_uploaded_file($_FILES['file']['tmp_name'], $targetFilePath))

					{

					

						$data = array( 'unique_id'=>$_POST['unique_id'][$makeindex] ,'title'=>$_POST['title'][$makeindex] ,'duration'=>$_POST['duration'][$makeindex] , 

						'video'=>$fileName ,

						'added_on'=>NOW

						);

						if ($this->db->insert('course_lectures_detail', $data))

						{  

							echo 'data saved...!';

							exit;

						}

					}

				}

			  }

			exit;

		}

	     

		 

function getOptionbyQuestionId(){
				extract($_POST);
				$this->db->select('*');
				$this->db->from($this->tbl_course_objectives_options);
				$this->db->where("question_id",$question_id);
				$data = $this->db->get();
				
				$html='<table class="table table-striped" >';
				$html.='<tr><th>#</th><th>Answer</th><th> Is true?</th></tr>';
					
				if ($data->num_rows()>0){
					$i=1;
					foreach($data->result() as $row){
						$html.='<tr><td>'.$i.'</td>';
						$html.='<td>'.$row->answer.'</td><td>'.$row->is_true.'</td>';
						$html.='</tr>';
						$i++;
						}
						
						
				}else{
						$html.='<tr><td >No data is available!</td><td>&nbsp;</td></tr>';
					
					}
				$html.='</table>';
				echo json_encode(array('status'=>200,'data'=>$html));
}	

	// remove course lecture	

	 public function courselecturerelecturevideo()

	 {

		extract($_POST);

		if(!empty($lecture_detail_id))

		{

			    $this->db->select('video');

				$this->db->from($this->course_lectures_detail);

				$this->db->where("id",$lecture_detail_id);

				$data = $this->db->get();

				

			    if ($data->num_rows()>0){

					$row = $data->row();

					unlink("./uploads/lectures/".$row->video);  

				   

					$this->db->where('id', $lecture_detail_id);

					echo  $this->db->delete($this->course_lectures_detail);

				}

			

		  }

	}

	

	

	 public function courselectureremove()

	  {

		extract($_POST);

		if(!empty($lectureid))

		{

		      

				$this->db->where('id', $lectureid);

				if($this->db->delete($this->course_lectures))

				{

		        

					$this->db->select('video');

					$this->db->from($this->course_lectures_detail);

					$data = $this->db->where("course_lectures_id",$lectureid)->get();

					

					if ($data->num_rows()>0)

					{

					

						$alist = array();

						foreach ($data->result() as $row)

						{

							unlink("./uploads/lectures/".$row->video);  

							$this->db->where('course_lectures_id', $lectureid);

							$this->db->delete($this->course_lectures_detail);

						}

					}

					 

					$arr = array('status' => true,'message' => "Lecture has been Deleted..!");

					echo json_encode($arr);

					exit;  	 

				  }

				  else

				  {

					 $arr = array('status' => 0,'message' => "There is something wrong. cannot deleted at the moment.");

					 echo json_encode($arr);

					 exit;    

				  }

			   }

	   }

	

	 

	public function update_image(){ 

	

		extract($_POST);

		$data = array();

		if (!empty($_FILES)){ 

		/*--------------------------------------------------

		|File uploading either single or multiple

		---------------------------------------------------*/

		

		$image = $this->crud->upload_files($_FILES);

		$data['file'] =$image;

		}

		else{

			$data['file'] =$edit_image_hidden;

			$image =$edit_image_hidden;

			}	

		

		//	pre($data);	

		$result =$this->crud->update_where($edit_img_id,'post_images',$data);

		/*===============================================*/

		

		switch($result){

		case 1:

			$arr = array('status' => 1,'image' => $image,'id' => $edit_img_id,'message' => "Updated Succefully !");

			echo json_encode($arr);

			break;

		case 0:

			$arr = array('status' => 0,'message' => "Not Updated!");

			echo json_encode($arr);

			break;

		default:

			$arr = array('status' => 0,'message' => "Not Updated!");

			echo json_encode($arr);

			break;	

		}

	}





	

	

}

