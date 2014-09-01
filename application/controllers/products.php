<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class products extends CI_Controller {

	public function index()
	{

        $this->load->model('Model_products');
        $data['li'] = $this->Model_products->get_categories();
        $data ['page'] = 'products';
        $data ['title'] = 'מוצרים';
		$this->load->view('includes/main', $data);

	}


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */