<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Librarymanagement extends MX_Controller {
	
	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('login')==true){
			redirect('auth/login', 'refresh');
		}
		$this->load->library("pagination");
	}
	public $view = "view";
	public $tbl = 'library_management';
	public $course_category = 'course_categories';
	public function index(){  
  
	$config = array();
   $config["base_url"] = base_url() . "librarymanagement/index";
	  $config["per_page"] = 1500;
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
	   $aData['staff'] = $this->crud->getActiveSessionStaff();
		$this->load->view('view',$aData);
	
	//	$aData['data'] =$this->db->select('*')->from($this->tbl)->order_by("id","desc")->get();
		//$this->load->view($this->view,$aData);
	}
	public function uploadedbystaff(){  
  
	$config = array();
   $config["base_url"] = base_url() . "librarymanagement/uploadedbystaff";
	  $config["per_page"] = 50;
        $config["uri_segment"] = 3;
		$config['page_query_string']=true;
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		if(isset($_GET['per_page'])){
			$uriSegment = $_GET['per_page'];
			 $config["uri_segment"] = $uriSegment;
		$page = ($uriSegment) ? $uriSegment : 0;
		
			}
			$config["total_rows"] =getcount('library_management');
		$this->pagination->initialize($config);

 $this->db->limit($limit, $start);
         $this->db->select("f.*,c.title as subject,bc.title as category")
		->join('course_categories as c','c.id=f.course_category_id')
		->join('bookcategories as bc','bc.id=f.cat_id')
		->order_by('f.id','DESC');
		$this->db->where('user_id', $this->session->userdata('user_id'));
	$data= $this->db->get($this->tbl.' as f');
		$aData['links'] = $this->pagination->create_links();
		
      
       $aData['data'] =$data;
	   $aData['staff'] = $this->crud->getActiveSessionStaff();
		$this->load->view('view',$aData);
	
	//	$aData['data'] =$this->db->select('*')->from($this->tbl)->order_by("id","desc")->get();
		//$this->load->view($this->view,$aData);
	}
	public function fetch_feed($limit, $start) {
        $this->db->limit($limit, $start);
         $this->db->select("f.*,c.title as subject,bc.title as category")
		->join('course_categories as c','c.id=f.course_category_id')
		->join('bookcategories as bc','bc.id=f.cat_id')
		->order_by('f.id','DESC');
		
		if(isset($_GET['title'])  and $_GET['title']!=''){
			$this->db->like('title', $_GET['title']);
		}
		if(isset($_GET['teacher_id'])  and $_GET['teacher_id']!=''){
			$this->db->where('user_id', $_GET['teacher_id']);
		}
		if(isset($_GET['uploadedbystaff'])){
			$this->db->where('user_id', get_session('user_id'));
		}
		
	return $this->db->get($this->tbl.' as f');
	
   }
	
	public function add(){  
	$aData['course_catogories'] = $this->db->select('id,title')
	->from($this->course_category)
	->group_by("title")
	->order_by("id","asc")
	->get();
	$aData['catogories'] = $this->db->select('id,title ')->from('bookcategories')
	
	->order_by("id","asc")
	
	->get();
		$this->load->view('save',$aData);
	}
	public function edit($id){
	$aData['course_catogories'] = $this->db->select('id,title ')->from($this->course_category)
	->group_by("title")
	->order_by("id","asc")->get();
	$aData['catogories'] = $this->db->select('id,title ')->from('bookcategories')->order_by("id","asc")->get();
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
		$this->form_validation->set_rules('title', 'title', 'trim|required');
		
		if ($this->form_validation->run()==false){
			$arr = array("status"=>"validation_error" ,"message"=> validation_errors());
			echo json_encode($arr);
		}else{
				/*--------------------------------------------------
			|Video uploading add/update
			---------------------------------------------------*/
				if (!empty($_FILES['image']['name'])){  
					$config['upload_path']          = './uploads/books/cover';
					$config['allowed_types']        = ALLOWED_TYPES;
					$config['encrypt_name'] = FALSE;
					$this->load->library('upload');
					$this->upload->initialize($config);
					if (!$this->upload->do_upload('image')){
					$arr = array('status' => 0,'message' => "Error ".$this->upload->display_errors());
					echo json_encode($arr);exit;
					}
					else{
					$upload_data = $this->upload->data();
					$_POST['image']='uploads/books/cover/'.$upload_data['file_name'];
					$this->resizeImage($_POST['image']);
					}
					
					
				}else{
					unset($_POST['image']);
				}
			
			/*===============================================*/
			/*--------------------------------------------------
			|Video uploading add/update
			---------------------------------------------------*/
				if (!empty($_FILES['bookfile']['name'])){ 
					$config['upload_path']          = './uploads/books/';
					$config['allowed_types']        = 'pdf|ppt|zip';
					$config['encrypt_name'] = FALSE;
					$this->load->library('upload');
					$this->upload->initialize($config);
					if (!$this->upload->do_upload('bookfile')){
					$arr = array('status' => 0,'message' => "Error ".$this->upload->display_errors());
					echo json_encode($arr);exit;
					}
					else{
					$upload_data = $this->upload->data();
					$_POST['bookfile']= 'uploads/books/'.$upload_data['file_name'];
					}
					
					
				}else{
					unset($_POST['bookfile']);
				}
			//pre($_POST);
			/*===============================================*/
			$_POST['user_id']=get_session('user_id');
			$result = $this->crud->saveRecord($PrimaryID,$_POST,$this->tbl);
			
			if(empty($PrimaryID)){
				$insrtID = $this->db->insert_id();
			}else{
				$insrtID =$PrimaryID;
				}
			
		switch($result){
			case 1:
			$arr = array('status' => 1,'message' => "Book uploaded Succefully !");
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
	


public function resizeImage($image,$width=200,$height=200){
	$this->load->library('image_lib');
    // Set your config up
    $config['image_library']    = "gd2";    
	$config['allowed_types'] = ALLOWED_TYPES;  
    $config['source_image']     = $image;      
    $config['create_thumb']     = true;      
    $config['maintain_ratio']   = FALSE;      
   // $config['quality']   = '60%';      
    $config['width'] = $width;      
    $config['height'] = $height;
	 $this->image_lib->initialize($config);
    // Do your manipulation

    if(!$this->image_lib->resize())
    {
        //echo json_encode(array('status'=>204,'message'=>$this->image_lib->display_errors())) ;
		//return 0;
		return 0;
    }
	else{
		return 1;
		} 	
	$this->image_lib->clear(); 
		
	}
	
	
	
}
