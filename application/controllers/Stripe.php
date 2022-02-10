<?php defined('BASEPATH') OR exit('No direct script access allowed');



class Stripe extends CI_Controller {

public $tbl_user ="users";
public $tbl_notify ="tbl_notify";

    function __construct()

	{
		parent::__construct();
		define('IMG',base_url().'uploads/');
		if(!$this->session->userdata('login')==true){
			redirect('user/login', 'refresh');
		}
	}


		public function index($package_id='')

		{
			if($package_id==''){
				$selectedPackage=false;
				}else{
				$row=	$this->db->where('id',$package_id)->get('membership_plans')->row();
				$aData['row'] = $row;
				$this->session->set_userdata('package_id',$package_id);
				$this->session->set_userdata('amount',$row->price);
				$selectedPackage=true;
					}
			$aData['page_title'] = 'Stripe';
			$aData['selectedPackage'] = $selectedPackage;
			$this->load->view('stripe',$aData);    
		}			


    function stripePayment()
      {
        require_once APPPATH . "third_party/stripe/init.php";
        //pre($this->session);		//set api key
        extract($_POST); //set api key
		$amount=get_session('amount');
		$package_id=get_session('package_id');
		
		
        $stripe = array(

            "secret_key" => STRIPE_SECRETE_KEY_TEST,
            "publishable_key" => STRIPE_PUBLISH_KEY_TEST
        );
        \Stripe\Stripe::setApiKey(STRIPE_SECRETE_KEY_TEST);
        $orderNo = uniqid();
        try
          {
            $charge     = \Stripe\Charge::create(array(
                "amount" => $amount * 100,
                "currency" => "usd",
                "source" => $stripeToken,
                'description' => 'orderNo:' . $orderNo
            ));
            //retrieve charge details
            $chargeJson = $charge->jsonSerialize();
            //	$this->response($chargeJson);
            if (is_array($chargeJson) && $chargeJson['object'] == 'charge')
              {
                $amount               = $chargeJson['amount'] / 100;
                //	$array=array('status'=>1,'message'=>'Transaction has been successfull');
                // After successfull payment transaction save transaction and billing data	
                $TransactionData      = array(
                    'address_zip' => 0,
                    'address_zip_check' => 0,
                    'brand' => $chargeJson['source']['brand'],
                    'country' => $chargeJson['source']['country'],
                    'exp_month' => $chargeJson['source']['exp_month'],
                    'exp_year' => $chargeJson['source']['exp_year'],
                    'funding' => $chargeJson['source']['funding'],
                    'last4' => $chargeJson['source']['last4'],
                    'description' => $chargeJson['description'],
                    'currency' => $chargeJson['currency'],
                    'amount' => $amount,
                    'object' => $chargeJson['object'],
                    'paid' => $chargeJson['paid'],
                    'package_id' => $package_id,
                    'txn_id' => $chargeJson['id']
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
                    $orderData = array(
                        'amount' => $amount,
                        'payment_id' => $payment_id,
                        'user_id' => get_session('user_id'),
                        'orderNo' => $orderNo,
                        'status' => 1,
                        'package_id' => $package_id,
                        'payment_method' => 'stripe'
                    );
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
          }
        //catch exception
        catch (Exception $e)
          {
            $data['status']  = 204;
            $data['message'] = $e->getMessage();
            echo json_encode($data);
            exit;
          }
      }

   

}// end of class

