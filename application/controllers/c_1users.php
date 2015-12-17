<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_1users extends CI_Controller {

	public function index()
    {
    	$data['users'] = $this->m_1users->get_users();
        $this->load->view('admin/v_ahead');
        $this->load->view('admin/v_admin_1users', $data);
        $this->load->view('admin/v_zfoot');
    }

    public function edit()
    {
    	$edit['use_code'] = $_POST['codeEditHide'];
    	$edit['use_firstname'] = $_POST['fnEdit'];
    	$edit['use_lastname'] = $_POST['lnEdit'];
    	$edit['use_login'] = $_POST['logEdit'];
    	$edit['use_password'] = $_POST['passEdit'];
    	$edit['use_phone'] = $_POST['phEdit'];
    	$edit['use_rol'] = $_POST['rolEdit'];
    	$data['message'] = $this->m_1users->edit_user($edit);
    	$data['users'] = $this->m_1users->get_users();
        $this->load->view('admin/v_ahead');
        $this->load->view('admin/v_admin_1users', $data);
        $this->load->view('admin/v_zfoot');
    }

    public function delete()
    {
    	$delete = $_POST['codeDeleteHide'];
    	$data['message'] = $this->m_1users->delete_user($delete);
    	$data['users'] = $this->m_1users->get_users();
        $this->load->view('admin/v_ahead');
        $this->load->view('admin/v_admin_1users', $data);
        $this->load->view('admin/v_zfoot');
    }

    public function addNew()
    {
    	$new['use_firstname'] = $_POST['fnNew'];
    	$new['use_lastname'] = $_POST['lnNew'];
    	$new['use_login'] = $_POST['logNew'];
    	$new['use_password'] = $_POST['passNew'];
    	$new['use_phone'] = $_POST['phNew'];
    	$new['use_rol'] = $_POST['rolNew'];
    	$data['message'] = $this->m_1users->create_user($new);
    	$data['users'] = $this->m_1users->get_users();
        $this->load->view('admin/v_ahead');
        $this->load->view('admin/v_admin_1users', $data);
        $this->load->view('admin/v_zfoot');
    }
}
