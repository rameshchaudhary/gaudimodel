<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class user extends CI_Controller {

	function index()
	{
		$this->load->model('admin/user_model');
		$data['users']=$this->user_model->display();	
		$this->load->view('admin/header');
		$this->load->view('admin/user_list_view', $data);
		$this->load->view('admin/footer');
	
	}
}
?>

