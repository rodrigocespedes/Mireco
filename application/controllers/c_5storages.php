<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_5storages extends CI_Controller {

	public function index()
    {
        $this->mainView();
    }

	public function addProduct()
    {
    	$carrito=array(
				'id'=> $_POST['pro_code'],
				'qty'=> $_POST['qty'],
				'price'=> $_POST['price'],
				'name'=> $_POST['pro_name']
        );
        $this->cart->insert($carrito);
        //print_r($this->cart->contents());
        $this->mainView();
    }
    
    public function addNewListStorages()
    {    	
    	$data['message'] = $this->m_5storages->addNewListStorages($_POST['today']);
    	$this->cart->destroy();
    	$this->mainView();
    }
    
    private function mainView()
    {    	
    	$data['codes'] = $this->m_2codes->get_codes();
    	$data['types'] = $this->m_3typesbrands->get_types();
    	$data['brands'] = $this->m_3typesbrands->get_brands();
    	$data['products'] = $this->m_4products->get_products();
    	$data['storage'] = $this->m_5storages->get_storage();
        $this->load->view('admin/v_ahead');
        $this->load->view('admin/v_admin_5storages', $data);
        $this->load->view('admin/v_zfoot');
    }
}
