<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pdfreader extends MX_Controller {
	
	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('login')==true){
			redirect('auth/login', 'refresh');
		}
	}
	public $view = "save";
	
	public function index($url=''){  

		$aData['src'] =$url;
		$this->load->view($this->view,$aData);
	}
	
	
	
	
}
