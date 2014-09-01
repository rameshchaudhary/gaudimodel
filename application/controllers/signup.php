<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Signup extends CI_Controller {

 function index()
 {
   $this->load->view('header');
  $this->load->view('signup_view');
   $this->load->view('footer');
 }
 
 function Verify_signup()
 {
	
	 //This method will have the credentials validation
   $this->load->library('form_validation');

   $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
   $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');   
   $this->form_validation->set_rules('email', 'email', 'trim|required|xss_clean');
   $this->form_validation->set_rules('name', 'name', 'trim|required|xss_clean');

   if($this->form_validation->run() == FALSE)
   {
     //Field validation failed.&nbsp; User redirected to login page
     $this->load->view('header');
  $this->load->view('signup_view');
   $this->load->view('footer');
   }
   else
   {
		$username= $this->input->post('username');
		$email= $this->input->post('email');
		$userrole= 2;
		$password= $this->input->post('password');
		$name= $this->input->post('name');
		$quote= $this->input->post('quote');
	 
	 $this->load->model('signup_model','',TRUE);
	 $this->signup_model->insert_user($username, $email, $userrole, $password, $name, $quote);
     //Go to private area
     redirect('admin/login', 'refresh');
   }
 }
}
?>