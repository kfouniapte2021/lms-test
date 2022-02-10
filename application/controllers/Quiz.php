<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quiz extends CI_Controller {
	/**
	*LMS Quiz controller 
	CREATED BY WASEEMAFZAL: waseemafzal31@gmail.com
	august 15 2020
	*/
	function __construct(){
	parent::__construct();
	}
	
public $tbl_course_quiz='course_quiz';	
public function index($id){
	$id=	base64_decode($id);
	$this->session->unset_userdata('obtain_marks');
	
$aData['page_title'] ='Quiz';
$quiz = $this->db->select('*')->where(array('course_id'=>$id,'status'=>1))->get('course_quiz')->row();
$aData['course_subjectives'] = $this->db->where(array('quiz_id'=>$quiz->id))->get('course_subjectives');
//lq();
//pre($quiz);
//lq();
$aData['quiz'] =$quiz;
$html='';
// check if user alreayd given this quiz
$where            = array(
                'quiz_id' => $quiz->id,
                'user_id' => get_session('user_id')
            );
			 if (checkExist('quize_attempted', $where) == 1)
              {	
			  $mydata = $this->db->where($where)->get('quize_attempted')->row();
			 $adata['status'] = 204;
			  $total=(int) $mydata->objective_marks +(int) $mydata->long_questions_marks ;
			 $html.= '<div style="padding:10px 2%" class=" alert-success" >Your already attempted this  objective and your score is: '.$total.'</div>';
           
			  $aData['html'] =$html;

			  }else{


$this->session->set_userdata('quiz_id',$quiz->id);

	// get multiple choices
$multipleData = $this->db->where(array('quiz_id'=>$quiz->id))->get('course_objectives');
if($multipleData->num_rows()>0){
	$i=1;
	$next=0;
$totalQuestion=	$multipleData->num_rows();
	foreach($multipleData->result() as $question){
		$next=1+$i;
		$display='none';
		if($i==1){
			$display="block";
			}
		$html.='<div class="question_wrap" style="display:'.$display.'" id="question_wrap'.$i.'">';
			$html.='<h5>'.$question->title.'</h5>';
			// now get and concate options
			$options = $this->db->where(array('question_id'=>$question->id))->get('course_objectives_options');
if($options->num_rows()>0){
	$j=1;
	$html.='<ul id="quizul" class="question_'.$next.'" >';
	foreach($options->result() as $option){
		//$opidsArr[]=$option->id;
		$title = str_replace('_',' ',$question->title);
		if($question->selection_type=='one'){
			
			$html.='<li><input type="radio" name="'.$title.'" value="'.$option->id.'"> <label> '.$option->answer.' </label></li>';
			}
		else{
			$html.='<li><input type="checkbox" name="'.$title.'" value="'.$option->id.'"> <label> '.$option->answer.' </label></li>';
			}
	
		
	}
	$html.='</ul>';
}
			// options concate end
			if($next<=$totalQuestion){
				$html.='<a href="javascript:void(0)" class="csbtn btnNext button'.$next.' btn btn-info btn-large" id="'.$next.'">Next</a>';
			}else{
				$html.='<a href="javascript:void(0)" class="csbtn btn btn-info btnShow btn-large ">Show Results</a>';
			}
		$html.='</div>';
	$i++;
	}
	
	
	}
		
$aData['html'] =$html;
/*****************************END MULTIPLE CHOICES****************************************/

$aData['quiz_title']='<h1>Quiz title: '.$quiz->quiz_title.'</h1><br><div id="some_div"></div>';
$aData['totalQuestion'] ='Total Question: '.$totalQuestion;
$where=array('user_id'=>get_session('user_id'),'quiz_id'=>get_session('quiz_id'));


			  }
			
					if(checkExist('quize_attempted',$where)){
						//pre($aData);
						$aData['quize_attempted'] =$this->db->where($where)->get('quize_attempted')->row();
						
						}  
		$this->load->view('quiz',$aData);
	}
	

function saveme(){
	extract($_POST);
	//pre($this->session->userdata());
	$obtain_marksss = $this->session->userdata('obtain_marks');
//	echo 'dieme '.$obtain_marksss;	exit;
	 if(!empty($obtain_marksss))
   {
	   
	$data=$this->db->select('*')->where('id',$id)->get('course_objectives_options');
			if($data->row()->is_true=='yes'){
			$obtained= $this->session->userdata('obtain_marks')+1;
			$this->session->set_userdata('obtain_marks',$obtained);
			echo json_encode(array('status'=>200,'total'=>$obtained,'session'=>$this->session->userdata()));exit;
			}
		//array_push($_SESSION['quizAns'],$ans_id);
		}
		
		else{
			$data=$this->db->select('*')->where('id',$id)->get('course_objectives_options');
			//lq();
			$true=0;
			if($data->row()->is_true=='yes'){
				$true=1;
			}
			$this->session->set_userdata('obtain_marks',$true);
				
			echo json_encode(array('status'=>200,'total'=>$true,'first'=>$true));exit;
			}
		}
		
    public function saveResult()
      {
      // pre($this->session->userdata());
        extract($_POST);
            $_POST['user_id'] = get_session('user_id');
            $_POST['quiz_id'] = get_session('quiz_id');
			   if (isset($_FILES['pdffile']['name']))
          {
            $info    = pathinfo($_FILES['pdffile']['name']);
            $ext     = $info['extension']; // get the extension of the file
            $newname = rand(5, 3456) * date(time()) . "." . $ext;
            $target  = 'uploads/' . $newname;
            if (move_uploaded_file($_FILES['pdffile']['tmp_name'], $target))
              {
                $_POST['pdffile'] = 'uploads/' . $newname;
              }
          }
			
            $where            = array(
                'quiz_id' => get_session('quiz_id'),
                'user_id' => get_session('user_id')
            );
			 if (checkExist('quize_attempted', $where) == 1)
              {				 
			$mydata = $this->db->where($where)->get('quize_attempted')->row();
			 $adata['status'] = 204;
			  $total=(int) $mydata->objective_marks +(int) $mydata->long_questions_marks ;
			 $adata['message'] = 'Your marks objective_marks are: '.$total;
               echo json_encode($adata);exit;
              }else{
				  $data=$this->db->select('*')->where('id',$id)->get('course_objectives_options');
			if($data->row()->is_true=='yes'){
			$obtained= $this->session->userdata('obtain_marks')+1;
			$this->session->set_userdata('obtain_marks',$obtained);
			}
                 $_POST['objective_marks']=$this->session->userdata('obtain_marks');
				if ($this->db->insert('quize_attempted', $_POST))
              {
				  $adata['status'] = 200;
				  $adata['obtain_marks'] = $this->session->userdata('obtain_marks');
                $adata['message'] = 'Your objective marks are : '.$this->session->userdata('obtain_marks') ;
                //pre($aData);
                echo json_encode($adata);exit;
              }
			  }
          }
 
			function saveSubjective(){ 
	$data=array();
				/*--------------------------------------------------
			|Video uploading add/update
			---------------------------------------------------*/
				if (!empty($_FILES)){ 
					$config['upload_path']          = './uploads/';
					$config['allowed_types']        = 'pdf';
					$config['encrypt_name'] = TRUE;
					$this->load->library('upload');
					$this->upload->initialize($config);
					if (!$this->upload->do_upload('image')){
					$arr = array('status' => 0,'message' => "Error ".$this->upload->display_errors());
					echo json_encode($arr);exit;
					}
					else{
					$upload_data = $this->upload->data();
					$data['pdffile']= $upload_data['file_name'];
					$where=array('user_id'=>get_session('user_id'),'quiz_id'=>get_session('quiz_id'));
					if(checkExist('quize_attempted',$where)){
						$this->db->where($where)->update('quize_attempted',$data);
						$result=2;
						}else{
						$this->db->insert('quize_attempted',$data);
							$result=1;
							}
					
					}
					
					
				}else{
					unset($_POST['image']);
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

/*******end of api ***********/	
}
