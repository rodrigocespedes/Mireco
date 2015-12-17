<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_4products extends CI_Controller {

	public function index()
    {
        $this->mainView();
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
    	$new['pro_name'] = $_POST['nameNewProduct'];
    	$new['cod_original'] = $_POST['selectCodeOriginal'];
    	$new['cod_alternative'] = $_POST['selectCodeAlternative'];
    	$new['typ_code'] = $_POST['selectType'];
    	$new['bra_code'] = $_POST['selectBrand'];
    	$new['pro_size'] = $_POST['measureNewProduct'];
    	$new['pro_description'] = $_POST['descriptionNewProduct'];
    	$data['message'] = $this->m_4products->create_product($new);
    	$this->mainView();
    }



	private function mainView()
    {    	
    	$data['codes'] = $this->m_2codes->get_codes();
    	$data['types'] = $this->m_3typesbrands->get_types();
    	$data['brands'] = $this->m_3typesbrands->get_brands();
    	$data['products'] = $this->m_4products->get_products();
        $this->load->view('admin/v_ahead');
        $this->load->view('admin/v_admin_4products', $data);
        $this->load->view('admin/v_zfoot');
    }
    
}
