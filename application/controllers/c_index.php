<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_index extends CI_Controller {

	public function index()
    {
        $this->load->view('admin/v_ahead');
        $this->load->view('admin/v_contain');
        $this->load->view('admin/v_zfoot');
    }
}
