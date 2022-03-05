<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paystack extends CI_Controller {

	public function index()
	{
		$this->load->view('product_form');		
	}
 public $tbl_custom_buyer_request = 'tbl_custom_buyer_request';



 public function charge()
 {
	 extract($_POST);
/*

{"redirecturl":"?trxref=633904766","trans":"877572444","trxref":"633904766","reference":"633904766","status":"success","message":"Success","response":"Approved"}*/
 $TransactionData=array(
				 'currency'=>'NGN',
				 'amount'=>$amount,
				 'package_id'=>$package_id,
				 'user_id'=>get_session('user_id'),
				 'paid'=>1,
				 'txn_id'=>$trans
				 );
				 
               
                //$amount=$amount/100;
                /**************************send email to buyer ************************************/
                $buyerHtml .= 'Dear user<br>';
                $buyerHtml .= '<p>Thanks for your subscription you can now browse all coursed videos</p>';
                
                $buyerHtml .= '<br><br><br><br><a href="' . base_url() . '" target="_blank">Skillsquared Team </a>';
                $subjectLineBuyer = 'Subsription done on Zenith LMS';
                	//$this->crud->send_mail(get_session('email'),FROM,HEADING,$subjectLineBuyer,$buyerHtml);
                /*********************************************************************************/
			//	
          if ($this->db->insert('order_card_detail', $TransactionData))
                  {
                    $payment_id = $this->db->insert_id();
                   
                    // save data into order table
                  $this->session->set_userdata('is_subscribed',1);
					$data['status']  = 200;
            $data['message'] = 'Successfully subscribed!';
            echo json_encode($data);
            exit;
                  }
                else
                  {
                    $data['status']  = 204;
            $data['message'] = 'transaction done but not saved in db';
            echo json_encode($data);
            exit;
                  }
                     
}


	public function success()
	{
		$data['status']=1;
		$data['message']='order have benn placed successfully';
		$data['orderStatusCheckLink']=$orderStatusCheckLink;
		$data['orderNo']=$orderNo;
		$this->cart->destroy();

		
	$this->load->view('success',$data);
	}

	public function payment_error()
	{
		$this->load->view('payment_error');
	}

	public function help()
	{
		$this->load->view('help');
	}
}
