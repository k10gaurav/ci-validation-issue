<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {


      public function __construct()
  {
    parent::__construct();
    $this->load->helper('form');
    $this->load->library('form_validation');
  }
  
  public function Index()
  {
      $data['title'] = 'Login';
      $data['page'] = 'user_register_login';
      $data['action'] = 'login';
      $this->load->view('includes/main',$data); 
  }
  
  public function login()
  {
    $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
    $this->form_validation->set_rules('password', 'Password', 'trim|required');


    if ($this->form_validation->run() == FALSE)
    {
	 $this->index();
    }
    else 
    {
		echo "success";
      // redirect(base_url());
    }
    
  }


    	public function register()

	{

        $data ['action'] = 'register';
        $data ['page'] = 'user_register_login';
        $data ['title'] = 'הירשם למערכת';
		$this->load->view('includes/main', $data);
       

	}

        	public function reset_password()

	{

        $data ['action'] = 'reset_password';
        $data ['page'] = 'user_register_login';
        $data ['title'] = 'איפוס סיסמה';
		$this->load->view('includes/main', $data);
       

	}





}
