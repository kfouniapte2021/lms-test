<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subscriber extends CI_Controller {
	
	function __construct(){
	  parent::__construct();
	}
	public $tbl_subscriber = 'tbl_subscriber';
	
	public function index()
	{
       
	   $this->load->library('form_validation');

		$this->form_validation->set_rules('sbcriber', 'Email', 'trim|required|valid_email');

		if ($this->form_validation->run()==false)
		{
			echo validation_errors();
		    //exit;
		}
		else
		{   
		   
		 if(checkExist( $this->tbl_subscriber , array('email'=>$this->input->post('sbcriber'))) > 0 )
		 {
			echo '<p class="sbcmssucalready">You already made subscription</p>';
		 }
		 else
		 {
		    $this->db->insert($this->tbl_subscriber,array('email'=>$this->input->post('sbcriber')));
		    echo '<p class="sbcmssuc">Subscribed successfully..</p>';
		 }
		}
	   exit;
	   
	}
	
	
public function pricing(){
			
			$aData['data'] =$this->db->get('membership_plans');

	$aData['page_title'] ='Membership Plans';
			$this->load->view('pricing',$aData);
		}
/*******end of api ***********/	
}
