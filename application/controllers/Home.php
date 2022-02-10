<?php defined('BASEPATH') OR exit('No direct script access allowed');



class Home extends CI_Controller {

public $tbl_user ="users";
public $tbl_notify ="tbl_notify";

    function __construct()

	{
		parent::__construct();
		define('IMG',base_url().'uploads/');
	}

     	public function index()

		{
			$aData['subjects'] =$this->db->query("select s.* from subjects  as s group by s.title   limit 0,9 ");
			
			$data = $this->db->select('*')->from('slider')->where('status',1)->get();
		if($data->num_rows()>0){
$aData['slider'] = $data;
		}else{
			$aData['slider'] =0;
			}
			$testimonial = $this->db->select('*')->from('testimonial')->get();
		if($testimonial->num_rows()>0){
$aData['testimonial'] = $testimonial;
		}else{
			$aData['testimonial'] =0;
			}
			$aData['page_title'] = 'Zenith LMS | The No. 1 Learning App for WAEC, NECO, BECE, Junior and Senior Secondary School';
			$aData['partners'] = $this->db->select('*')->from('slider_images')->where('post_id',1)->get();
			$aData['courses'] = $this->db->get('getcourse');
			$aData['trainer'] =$this->db->select("u.id,u.name,u.email,u.phone,u.address,u.designation,u.description,subject.title as assignedSubject,CONCAT('".IMG."',u.image) as image")
->from('users as u')
->join('course_categories as subject','subject.id=u.subject_id')->get();


			//lq();
			$aData['subjects'] = $this->db->query("SELECT s.title as subject,CONCAT('".IMG."',s.file) as image FROM `course_categories` as s GROUP BY title LIMIT 8");
			$aData['testimonial'] =$this->db->get('testimonial');

			if($this->session->userdata('userlogin')==1){
			$is_subscribed=	$this->ifSubscribedtrue(get_session('user_id'));
			$this->session->set_userdata('is_subscribed',$is_subscribed);
			}
			$aData['home'] =true;
			$this->load->view('index',$aData);    
		}			
	/*
	create view getcourse as SELECT c.id as course_id, cl.class_name, cc.title as subjects,u.name as trainerName,u.image as trainerImage,c.post_title as courseTitle,c.price,c.thumbnail,
(SELECT COUNT(id) FROM course_lectures WHERE course_id=c.id ) as lesseonsCount
FROM `course` as c 
JOIN  course_categories as cc on cc.id=c.course_category_id
JOIN  users as u on u.subject_id=c.course_category_id
JOIN  classes as cl on cl.id=c.class_id
	*/	
		
public function history()

		{
			$aData['page_title'] = 'history';
			$this->load->view('history',$aData);    
		}			
public function mission()

		{
			$aData['page_title'] = 'mission';
			$this->load->view('mission',$aData);    
		}			
		

		public function team()
		
		{
			$aData['page_title'] = 'team';
			$aData['aTeams'] = $this->db->select('*')->from('tbl_team')->get();
			$this->load->view('team',$aData); 
		}			
		

function ifSubscribedtrue($user_id){
	   $package=array();
	   $package['is_subscribed']=false;
	   $res=0;
	   $package['package']='No Subscription';
	   $data=$this->db->where('user_id',$user_id)->order_by("user_id","desc")->get('order_card_detail');
	   if($data->num_rows()>0){
		   $row=$data->row();
		  $package =  $this->db->select('title as package')->where('id',$row->package_id)->get('membership_plans')->row()->package;
		   if ($row->created_on < strtotime('-30 days') and $row->package_id==1){
			   $res=1;
/*			   $package['is_subscribed']=true;
			   			   $package['package']=$package;
*/			   }
			    if ($row->created_on < strtotime('-120 days') and $row->package_id==2){
					$res=1;
/*			   $package['is_subscribed']=true;
			   			   			   $package['package']=$package;
*/			   }
			   if ($row->created_on < strtotime('-365 days') and $row->package_id==3){
/*			   $package['is_subscribed']=true;
			   			   			   $package['package']=$package;
*/			   
$res=1;
}
		   }
		   return $res;	   
	   }
   

   

}// end of class

