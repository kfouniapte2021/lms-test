<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Schedule extends MX_Controller {
	
	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('login')==true){
			redirect('auth/login', 'refresh');
		}
	}
	public $view = "view";
	public $tbl = 'tbl_schedule';
	
	public function index(){  

if(isset($_GET['class_id'])){
		$aData['data'] =$this->db->query("SELECT p.*,c.post_title as course_title,u.name FROM ".$this->tbl." as p 
		join users as u on u.id=p.teacher_id
		join course as c on c.id=p.course_id
		where p.class_id=".$_GET['class_id']);
}else{
	$aData['data'] =$this->db->query("SELECT p.*,c.post_title as course_title,u.name FROM ".$this->tbl." as p 
		join users as u on u.id=p.teacher_id
		join course as c on c.id=p.course_id
		");
	}
		//lq();
		$aData['class_id'] =$_GET['class_id'];
		$this->load->view($this->view,$aData);
	}
	public function add(){  
	$aData['staff'] =$this->crud->getActiveSessionStaff();
	$aData['class_id'] =$_GET['class_id'];
	$aData['courses'] =$this->db->select('id as course_id,post_title')->where(array('status'=>1,'class_id'=>$_GET['class_id']))->get('course');
	
	
		$this->load->view('save',$aData);
	}
	public function edit($id){
		$query =$this->crud->edit($id,$this->tbl);
		
		$aData['row']=$query;
		$aData['courses'] =$this->db->select('id as course_id,post_title')->where(array('class_id'=>$query->class_id))->get('course');
		
		//pre($aData);
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
		$PrimaryID = $_POST['id'];
		
		//$slugs = $_POST['slug'];
		unset($_POST['action'],$_POST['id'],$_POST['hour'],$_POST['minute'],$_POST['meridian']);
		
		$this->load->library('form_validation');
		$this->form_validation->set_rules('from_time', 'from time', 'trim|required');
		$this->form_validation->set_rules('to_time', 'to time', 'trim|required');
		$this->form_validation->set_rules('day', 'day', 'trim|required');
		$this->form_validation->set_rules('teacher_id', 'teacher', 'trim|required');
		if ($this->form_validation->run()==false){
			$arr = array("status"=>"validation_error" ,"message"=> validation_errors());
			echo json_encode($arr);
		}else{
			
			
		/*--------------------------------------------------
			|file uploading add/update
			---------------------------------------------------*/
				if (!empty($_FILES)){ 
					$config['upload_path']          = './uploads/';
					$config['allowed_types']        = ALLOWED_TYPES;
					$config['max_size'] = 2000;
					$config['max_height'] = 300;
					$config['max_width'] = 300;
					$config['encrypt_name'] = TRUE;
					$this->load->library('upload');
					$this->upload->initialize($config);
					if (!$this->upload->do_upload('image')){
					$arr = array('status' => 0,'message' => "Error ".$this->upload->display_errors());
					echo json_encode($arr);exit;
					}
					else{
					$upload_data = $this->upload->data();
					$_POST['post_banner']= $upload_data['file_name'];  
					$this->_createThumbnail($upload_data['file_name']);
							
					}
					
					
				}else{
					unset($_POST['image']);
				}
			
				/********************upload image end***********************/
	    $result = $this->crud->saveRecord($PrimaryID,$_POST,$this->tbl);
		//	lq();
			$e = $this->db->error(); // Gets the last error that has occured
$num = $e['code'];
$mess = $e['message'];
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
			$arr = array('status' => 0,'message' => "Not Saved!".$mess);
			echo json_encode($arr);
			break;
			default:
			$arr = array('status' => 0,'message' => "Not Saved!".$mess);
			echo json_encode($arr);
			break;	
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
		$result =$this->crud->update_where($edit_img_id,'blogpost_images',$data);
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


	
		function _createThumbnail($filename)
    {
        $this->load->library('image_lib');
        // Set your config up
        $config['image_library']  = "gd2";
        $config['allowed_types']  = ALLOWED_TYPES;
        $config['source_image']   = "uploads/" . $filename;
        $config['create_thumb']   = TRUE;
        $config['maintain_ratio'] = false;
        $config['width']          = "300";
        $config['height']         = "300";
        $this->image_lib->initialize($config);
        // Do your manipulation
        if (!$this->image_lib->resize()) {
            echo $this->image_lib->display_errors();
        }
        $this->image_lib->clear();
    }
	
}
