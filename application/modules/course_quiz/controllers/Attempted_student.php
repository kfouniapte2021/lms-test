<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Attempted_student extends MX_Controller {
	
	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('login')==true){
			redirect('auth/login', 'refresh');
		}
		$this->load->library("pagination");
	}
	public $view = "view";
	public $tbl = 'quize_attempted';
	public $course_category = 'course_categories';
	
	public function index($quiz_id){  
  
	$data=	$this->db->query("SELECT qa.*,u.name,u.image FROM `quize_attempted` as qa
join users as u on u.id=qa.user_id
WHERE qa.quiz_id='".$quiz_id."'");
      
       $aData['data'] =$data;
       $aData['quiz_id'] =$quiz_id;
		$this->load->view('qttempted_student_view',$aData);
	
	//	$aData['data'] =$this->db->select('*')->from($this->tbl)->order_by("id","desc")->get();
		//$this->load->view($this->view,$aData);
	}
	public function fetch_feed($limit, $start) {
        $this->db->limit($limit, $start);
         $this->db->select("f.*,c.post_title as course_title ")
		->join('course as c','c.id=f.course_id')
		->order_by('f.id','DESC');
		if(isset($_GET['title'])  and $_GET['title']!=''){
			$this->db->like('title', $_GET['title']);
		}
		
	return $this->db->get($this->tbl.' as f');
	
   }
	
	public function add(){  
	$aData['courses'] = $this->db->select('id,post_title as title ')->from('course')->order_by("id","asc")->get();
		$this->load->view('save',$aData);
	}
	public function edit($id,$quiz_id){
		$aData['row']= $this->db->select('ca.*,u.name')
		->from($this->tbl.' as ca')
		->join('users as u ','u.id=ca.user_id')
		->get()->row();
		$aData['quiz_id']=$quiz_id;
		//$aData['row']=$query;
		
		$this->load->view('edit_grade',$aData);
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
		$quiz_idCurrent = $_POST['quiz_id'];
		
		unset($_POST['action'],$_POST['id'],$_POST['quiz_id']);
		$this->load->library('form_validation');
		$this->form_validation->set_rules('long_questions_marks', 'Subjective marks', 'trim|required');
		
		if ($this->form_validation->run()==false){
			$arr = array("status"=>"validation_error" ,"message"=> validation_errors());
			echo json_encode($arr);
		}else{
				
			$result = $this->crud->saveRecord($PrimaryID,$_POST,$this->tbl);
			
			if(empty($PrimaryID)){
				$insrtID = $this->db->insert_id();
			}else{
				$insrtID =$PrimaryID;
				}
			$redirect='course_quiz/attempted_student/index/'.$quiz_idCurrent;
		switch($result){
			case 1:
			$arr = array('status' => 1,'redirect' => $redirect,'message' => "Saved Succefully !");
			echo json_encode($arr);
			break;
			case 2:
			$arr = array('status' => 2,'redirect' => $redirect,'message' => "Updated Succefully !");
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
	


	
	
}
