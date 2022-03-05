<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Course_quiz extends MX_Controller {
	
	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('login')==true){
			redirect('auth/login', 'refresh');
		}
		$this->load->library("pagination");
	}
	public $view = "view";
	public $tbl = 'course_quiz';
	public $course_category = 'course_categories';
	
	public function index(){  
  
	$config = array();
   $config["base_url"] = base_url() . "course_quiz/index";
	  $config["per_page"] = 15;
        $config["uri_segment"] = 3;
		$config['page_query_string']=true;
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		if(isset($_GET['per_page'])){
			$uriSegment = $_GET['per_page'];
			 $config["uri_segment"] = $uriSegment;
		$page = ($uriSegment) ? $uriSegment : 0;
		
			}
			$config["total_rows"] =getcount('library_management');
/*****************/
$config['full_tag_open'] = "<ul class='pagination'>";
$config['full_tag_close'] ="</ul>";
$config['num_tag_open'] = '<li>';
$config['num_tag_close'] = '</li>';
$config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
$config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
$config['next_tag_open'] = "<li>";
$config['next_tagl_close'] = "</li>";
$config['prev_tag_open'] = "<li>";
$config['prev_tagl_close'] = "</li>";
$config['first_tag_open'] = "<li>";
$config['first_tagl_close'] = "</li>";
$config['last_tag_open'] = "<li>";
$config['last_tagl_close'] = "</li>";
		$this->pagination->initialize($config);
// pre($whereArr);
        $data = $this->fetch_feed($config["per_page"], $page);
		//lq();
		$aData['links'] = $this->pagination->create_links();
		
      
       $aData['data'] =$data;
		$this->load->view('view',$aData);
	
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
	
	$aData['courses'] = $this->db->select('id,post_title as title ')->from('course')->where('user_id',get_session('user_id'))->order_by("id","asc")->get();
		$this->load->view('save',$aData);
	}
	public function edit($id){
		$aData['courses'] = $this->db->select('id,post_title as title ')->from('course')->order_by("id","asc")->get();
		$query =$this->crud->edit($id,$this->tbl);

		$aData['row']=$query;
		
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
		$this->load->library('form_validation');
		$this->form_validation->set_rules('quiz_title', 'quiz title', 'trim|required');
		//$this->form_validation->set_rules('type', 'course type','trim|required');
		
		if ($this->form_validation->run()==false){
			$arr = array("status"=>"validation_error" ,"message"=> validation_errors());
			echo json_encode($arr);exit;
		}else{
				if(checkExist('course_quiz',array('status'=>1,'course_id'=>$course_id))){
					$arr = array("status"=>"validation_error" ,"message"=> 'You already have one active course quiz, Please make that inactive if you want to add more quiz.');
			echo json_encode($arr);exit;
					}
			$result = $this->crud->saveRecord($PrimaryID,$_POST,$this->tbl);
			
			if(empty($PrimaryID)){
				$insrtID = $this->db->insert_id();
			}else{
				$insrtID =$PrimaryID;
				}
			
		switch($result){
			case 1:
			$arr = array('status' => 1,'message' => "Saved Succefully !");
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
