<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_products extends CI_Model {

	public function get_categories()
	{
        $query = $this->db->query('SELECT * FROM categories');


        $li = '';

        if ($query->num_rows()){

            foreach ($query->result() as $row)
            {
                
                $li .= '<li><a href="#">'. $row->name. '</a></li>';


            }

            }

            return $li;

	}


}

