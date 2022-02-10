<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Course_categories extends MX_Controller {
	
	public function __construct(){
		$this->router->fetch_class();
		parent::__construct();
		if(!$this->session->userdata('login')==true){
			redirect('auth/login', 'refresh');
		}
	}
	public $view = "view";
	public $tbl = 'course_categories';
	public $tbl_classes = 'classes';
	
	public function index(){  
if(isset($_GET['class_id'])){
		$aData['data'] =$this->db->query('select  course_categories.* ,c.class_name,b.batch_id from  `course_categories`
JOIN classes as c on c.id=`course_categories`.class_id
 JOIN batch_session as b on b.id=c.batch_id
 where c.id='.$_GET['class_id'].'
 ');
		$aData['class_name'] =$this->getclasstitle($_GET['class_id']);
		$aData['batchClass'] =$this->getBatchByClassId($_GET['class_id']);
		
		
	}
		$aData['table'] =$this->tbl;
		$this->load->view($this->view,$aData);
	}
	
	public function getclasstitle($id){
	return 	$this->db->select('class_name')
		->where('id',$id)
		->get('classes')
		->row()
		->class_name;	
		}
		
	function getBatchByClassId($id){
	$data=	$this->db->query("SELECT c.class_name,b.batch_id FROM `classes` as c
join batch_session as b on b.id=c.batch_id where c.id=".$id);
if($data->num_rows()>0){
	return $data->row();
	}
		}	
	public function add(){  
	if(isset($GET['class_id']) and $GET['class_id']!=''){
		$aData['class_id'] =$GET['class_id'];
		$aData['class_name'] =$this->getclasstitle($_GET['class_id']);
		}
			$aData['classes'] =$this->db->get($this->tbl_classes);

		$this->load->view('save',$aData);
	}
	public function edit($id,$class_id=0){
		$query =$this->crud->edit($id,$this->tbl);
		$aData['row']=$query;
		if($class_id!=0){
			$aData['class_id']=$class_id;
			$aData['class_name'] =$this->getclasstitle($class_id);
			}
		$aData['classes'] =$this->db->get($this->tbl_classes);
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
	
		unset($_POST['action'],$_POST['id']);
				/****************DUPLICATE VALIDATION START ******************/
		$where=array('class_id'=>$class_id,'title'=>$title);
		$sql = $this->db->select('id,title')->where($where)->get('course_categories');
		if($sql->num_rows()>0){
			$id = $sql->row()->id;
			if($PrimaryID ==''){
				// check for duplicate
				if(checkExist('course_categories',$where)){
						echo json_encode(array('status' => 0,'message' => "This subject already exist with this class !"));exit;
				}
				}else{
					// check if ids are not same then error
					if($PrimaryID !=$id){
						echo json_encode(array('status' => 0,'message' => "This subject already exist with this class   "));exit;
						}
					}
	
	
			}
			/****************DUPLICATE VALIDATION END ******************/

		$this->load->library('form_validation');
		$this->form_validation->set_rules('title', 'title', 'trim|required');
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
					$_POST['file']= $upload_data['file_name'];
					}
					
					
				}
			
			/*===============================================*/
			$redirect='subjects';

			$result = $this->crud->saveRecord($PrimaryID,$_POST,$this->tbl);
			//pre($_POST);
			if($class_id!=0){
				$redirect='subjects?class_id='.$class_id;
				}
				
		switch($result){
			case 1:
			$arr = array('status' => 1,'redirect' => $redirect,'message' => "Inserted Succefully !");
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
