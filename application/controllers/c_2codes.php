<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_2codes extends CI_Controller {

	public function index()
    {
    	$data['codes'] = $this->m_2codes->get_codes();
        $this->load->view('admin/v_ahead');
        $this->load->view('admin/v_admin_2codes', $data);
        $this->load->view('admin/v_zfoot');
    }

    public function delete()
    {
    	$delete = $_POST['codeDeleteHide'];
    	$data['message'] = $this->m_2codes->delete_code($delete);
    	$data['codes'] = $this->m_2codes->get_codes();
        $this->load->view('admin/v_ahead');
        $this->load->view('admin/v_admin_2codes', $data);
        $this->load->view('admin/v_zfoot');
    }

    public function addNew()
    {
    	$new['cod_name'] = $_POST['nameNew'];
    	$new['cod_type'] = $_POST['tyNew'];
    	$data['message'] = $this->m_2codes->create_code($new);
    	$data['codes'] = $this->m_2codes->get_codes();
        $this->load->view('admin/v_ahead');
        $this->load->view('admin/v_admin_2codes', $data);
        $this->load->view('admin/v_zfoot');
    }
}
