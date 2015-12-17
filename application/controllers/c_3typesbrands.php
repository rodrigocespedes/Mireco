<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_3typesbrands extends CI_Controller {

	public function index()
    {
    	$this->mainView();
    }

    public function deleteType()
    {
    	$delete = $_POST['typeDeleteHide'];
    	$data['message'] = $this->m_3typesbrands->delete_type($delete);
    	$this->mainView();
    }

    public function deleteBrand()
    {
    	$delete = $_POST['brandDeleteHide'];
    	$data['message'] = $this->m_3typesbrands->delete_brand($delete);
    	$this->mainView();
    }


    public function addNewType()
    {
    	$new['typ_name'] = $_POST['nameNewType'];
    	$new['typ_description'] = $_POST['descriptionNew'];
    	$data['message'] = $this->m_3typesbrands->create_type($new);
    	$this->mainView();
    }

    public function addNewBrand()
    {
    	$new['bra_name'] = $_POST['nameNewBrand'];
    	$new['bra_country'] = $_POST['countryNew'];
    	$data['message'] = $this->m_3typesbrands->create_brand($new);
    	$this->mainView();
    }


	private function mainView()
    {    	
    	$data['types'] = $this->m_3typesbrands->get_types();
    	$data['brands'] = $this->m_3typesbrands->get_brands();
        $this->load->view('admin/v_ahead');
        $this->load->view('admin/v_admin_3typesbrands', $data);
        $this->load->view('admin/v_zfoot');
    }
    
}
