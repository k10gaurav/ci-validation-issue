<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class about extends CI_Controller {

	public function index()
	{

        $data ['page'] = 'about';
        $data ['title'] = 'אודותנו';
		$this->load->view('includes/main', $data);

	}


    public function compeny($site = NULL)
	{

        $data ['Exa'] = ($site == 'Examples') ? TRUE : FALSE;     
        $data ['Cust'] = ($site == 'Customers') ? TRUE : FALSE;
        $data ['page'] = 'compeny';
        $data ['title'] = 'על החברה';
		$this->load->view('includes/main', $data);

	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */