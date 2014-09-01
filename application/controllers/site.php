<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class site extends CI_Controller {

	public function index()
	{
        $data ['page'] = 'home';
        $data ['title'] = 'דף הבית';
		$this->load->view('includes/main', $data);

	}


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */