<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        
        // Load form validation library
        $this->load->library('form_validation');
    }
    
    public function index(){
        $data = $formData = array();
         // pre($this->input->post());
        // If contact request is submitted
        if(isset($_POST['contactsubmit'])){
          extract($_POST);
            // Form field validation rules
            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('subject', 'Subject', 'required');
            $this->form_validation->set_rules('phone', 'phone', 'required');
            $this->form_validation->set_rules('message', 'Message', 'required');
            
            // Validate submitted form data
            if($this->form_validation->run() == true){
             
                // Send an email to the site admin
                $send = $this->sendEmail($_POST);
                
                // Check email sending status
                if($send){
                    // Unset form data
                    $formData = array();
                    
                    $data['status'] = array(
                        'type' => 'success',
                        'msg' => 'Your contact request has been submitted successfully.'
                    );
                }else{
                    $data['status'] = array(
                        'type' => 'danger',
                        'msg' => 'Some problems occured, please try again.'
                    );
                }
            }
        }
        
        // Pass POST data to view
        $data['postData'] = $formData;
        $data['page_title'] = 'contact us';
        // Pass the data to view
        $this->load->view('contact', $data);
    }
    
    private function sendEmail($mailData){
        
        
        // Load the email library
        $this->load->library('email');
        
        // Mail config
       // $to = 'Olebint001@gmail.com';
        $to = 'waseemafzal31@gmail.com';
        $from = 'support@zenith.com';
        $fromName = 'Zenith';
        $subject = 'Contact  by '.$mailData['name'];
        
        // Mail content
        $htmlContent = '<div style="width: 88%;margin: 0 auto;border: 10px solid #e6dfdf;padding: 0 5%;border-radius: 5px;background-color: #f5f5f58c;">
            <h2>Below is the detail of the Person who contacted!</h2>
            <p><b>Name: </b>'.$mailData['name'].'</p>
            <p><b>Email: </b>'.$mailData['email'].'</p>
            <p><b>Subject: </b>'.$mailData['subject'].'</p>
            <p><b>Message: </b>'.$mailData['message'].'</p></div>
        ';
            
  if($this->crud->send_mail($to,$from,$fromName,$subject,$htmlContent)
			){
				return true;
				}
        // Send email & return status
        
    }
    
}