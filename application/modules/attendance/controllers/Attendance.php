
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Attendance extends MX_Controller {
	
	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('login')==true){
			redirect('auth/login', 'refresh');
		}
	}
	public $view = "view";
	public $tbl = 'users';
	public $tbl_attendance = 'attendance';
	
	public function index(){  
$data=$this->db->select('c.class_id,classes.class_name')->from('course c')
->join('classes','classes.id=c.class_id')
->where(array('c.user_id'=>get_session('user_id')))
->get();

$arr=array();
$aData['classes'] =$data;
if($data->num_rows()>0){
	foreach($data->result() as $row){
		$arr[]=$row->class_id;
		}
	}
	if(isset($_GET['class_id']) and $_GET['class_id']!=''){
		$aData['data'] =$this->db->select('u.id,u.name,u.email,u.phone,u.address,u.image')
		->from($this->tbl.' u')
		->where('class_id',$_GET['class_id'])
		->get();
		}else{
			$aData['data'] =$this->db->select('u.id,u.name,u.email,u.phone,u.address,u.image')
		->from($this->tbl.' u')
		->where_in('class_id',$arr)
		->get();
			}
	//	lq();
		$this->load->view($this->view,$aData);
	}
	
	public function add(){  
		$this->load->view('save');
	}
	public function getAttendance(){  
	$data=$this->db->select('a.*,u.name,u.email,u.image')->from('attendance a')
->join('users u','u.id=a.student_id')
->where(array('a.date'=>$_POST['date'],'a.class_id'=>$_POST['class_id'],'a.course_id'=>$_POST['course_id']))
->get();
$html='<form id="form_add"  name="form_update" role="form"><table class="table table-striped">
    <thead><tr>
        <th>Name</th>
        <th>If Present</th>
        <th>Notes</th>
    </tr>
    </thead><tbody>';
if ($data->num_rows() > 0) {
			foreach($data->result() as $row){
									$yesChecked='';
					$noChecked='';

				if($row->ifpresent=='yes'){
					$yesChecked='checked="checked"';
					}
				if($row->ifpresent=='no'){
					$noChecked='checked="checked"';
					}
		$html.='<tr id="row_'.$row->id.'">
        
        <td>'.$row->name.'</td>
        <td><input type="radio" '.$yesChecked.'  value="yes" name="ifpresent['.$row->id.']" /> Yes 
        
        <input type="radio" '.$noChecked.' value="no" name="ifpresent['.$row->id.']" />
        No
        </td>
        <td><input type="text" name="comments[]" value="'.$row->comments.'" placeholder="Optional" class="form-control" /></td>
       
        <td class="center">
            
        </td>
    </tr>';
		}
        } else{
		$html.=	'<tr>
        <td colspan="3">No data found</td>
        
    </tr>';
			
			}
			$html.='</tbody>
    </table>
	<div class="col-xs-12  col-md-3">
             <input type="button" onclick="saveAttendance()" class="btn btn-info" value="Update Attendance"><input type="hidden" name="action" value="update"> 
			 <input type="hidden" name="date" value="'.$_POST['date'].'"> 
			 
			 
             </div>
	</form>';
	
		$arr = array('status' => 200,'html' => $html);
			echo json_encode($arr);
	}
	public function edit($id){
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
	
	public function saveAttendance(){
		
		extract($_POST);
		if(isset($action) and $action!='update'){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('date', 'date', 'trim|required');
		if ($this->form_validation->run()==false){
			$arr = array("status"=>"0" ,"message"=> validation_errors());
			echo json_encode($arr);exit;
		}
		}
		$i=0;
		if(is_array($ifpresent) and !empty($ifpresent)){
			
		/********loop start******/
			foreach($ifpresent as $key=>$val){
			$student_id=$key;
			$PresentOrNot=$val;
			$data=array(
			'student_id'=>$student_id,
			'comments'=>$comments[$i],
			'course_id'=>$course_id,
			'class_id'=>$class_id,
			'ifpresent'=>$PresentOrNot
			);
			if(isset($date)){
				$data['date']=$date;
				}
			
			if($this->saveAttendanceDB($data)!=1){
				dberror();
				}
			$i++;
			}
			/********loop end******/
			}
			$arr = array("status"=>200 ,"message"=> $i. ' record saved successfully!');
			echo json_encode($arr);exit;
		}
	
	function saveAttendanceDB($data_array){
		$result = 0;
		$where=array(
		'class_id'=>$data_array['class_id'],
		'course_id'=>$data_array['course_id'],
		'date'=>$data_array['date'],
		'student_id'=>$data_array['student_id']
		);
		$query = $this->db->select('*')->from($this->tbl_attendance)->where($where)->get();
		//lq();
        if ($query->num_rows() > 0) {
			
			 $this->db->where($where)->update($this->tbl_attendance,$data_array);
            $result = 1;
        } else {
            $dbExi  = $this->db->insert($this->tbl_attendance, $data_array);
            if ($dbExi) {
                $result = 1;
            }
        }
		//lq();
		return $result;
	}
	
	function save(){ 
		extract($_POST);
		$PrimaryID = $_POST['id'];
		unset($_POST['action'],$_POST['id']);
		$this->load->library('form_validation');
		$this->form_validation->set_rules('date', 'date', 'trim|required');
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
	



				public function update_image(){ 
	
		extract($_POST);
		$data = array();
		if (!empty($_FILES)){ 
		/*--------------------------------------------------
		|File uploading either single or multiple
		---------------------------------------------------*/
		
		$image = $this->crud->upload_files($_FILES);
		$data['image'] =$image;
		}
		else{
			$data['image'] =$edit_image_hidden;
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
