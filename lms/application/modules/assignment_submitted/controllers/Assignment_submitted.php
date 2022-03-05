<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class assignment_submitted extends MX_Controller {
	
	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('login')==true){
			redirect('auth/login', 'refresh');
		}
	}
	public $view = "view";
	public $tbl = 'assignment_submitted';
	
	public function index(){  
		$where=array('assignment_id'=>$_GET['assignment_id']);
		$this->db->select("a.*,u.name,u.image,asm.topic")
         ->from('assignment_submitted a')
         ->join('assignment asm', 'asm.id = a.assignment_id')
         ->join('users u', 'u.id = a.student_id')
		 ->where($where);
$aData['data'] = $this->db->get();
			
		
		$aData['assignment_id']=$_GET['assignment_id'];
		$this->load->view($this->view,$aData);
	}
	public function add(){  
	$aData['assignment_id']=$_GET['assignment_id'];
		$this->load->view('save',$aData);
	}
	public function edit($id){
		$query =$this->crud->edit($id,$this->tbl);

		$aData['row']=$query;
		$aData['assignment_id']=$aData['row']->assignment_id;
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
	public function updateMarks(){ 
		extract($_POST);
		$arr = array('status' => 204,'message' => "Marks not updated!");
		if($this->db->where('id',$id)->update($this->tbl,array('marks'=>$marks))){
		//	lq();
			$arr = array('status' => 200,'message' => "Updated marks!");
			}
			echo json_encode($arr);
	}
	
	
	function save(){ 
		extract($_POST);
		$PrimaryID = $_POST['id'];
		unset($_POST['action'],$_POST['id']);
		$this->load->library('form_validation');
		$this->form_validation->set_rules('topic', 'topic', 'trim|required');
		$this->form_validation->set_rules('last_date', 'Last submission date', 'trim|required');
		if ($this->form_validation->run()==false){
			$arr = array("status"=>"validation_error" ,"message"=> validation_errors());
			echo json_encode($arr);
		}else{
				/*--------------------------------------------------
			|Video uploading add/update
			---------------------------------------------------*/
				if (!empty($_FILES)){ 
					$config['upload_path']          = './uploads/';
					$config['allowed_types']        = ALLOWED_TYPES;
					$config['encrypt_name'] = TRUE;
					$this->load->library('upload');
					$this->upload->initialize($config);
					if (!$this->upload->do_upload('image')){
					$arr = array('status' => 0,'message' => "Error ".$this->upload->display_errors());
					echo json_encode($arr);exit;
					}
					else{
					$upload_data = $this->upload->data();
					$_POST['image']= $upload_data['file_name'];
					}
					
					
				}else{
					unset($_POST['image']);
				}
			
			/*===============================================*/
			$_POST['created_by']=get_session('user_id');
			
			$result = $this->crud->saveRecord($PrimaryID,$_POST,$this->tbl);
			
			if(empty($PrimaryID)){
				$insrtID = $this->db->insert_id();
			}else{
				$insrtID =$PrimaryID;
				}
			
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
	


	
	
}
