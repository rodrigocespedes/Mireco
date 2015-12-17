<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_publicPage extends CI_Controller {

	public function index()
	{
		if($this->session->userdata("usuario"))
					{
						$usu= $this->session->userdata('usuario');
						$cargo= $this->session->userdata('cargo');
						$resto = substr($cargo, 0, 3);
						if($cargo == "Ventas")
							{
								$cargo = "Encargado de ".$cargo;
							}
							$datos['actor']=$cargo;
							$datos['nombre']=$usu;
							switch($resto)
								    {
								    case "Adm" : 
								        $this->load->view('admin/v_acabeza',$datos);
										break;
								    case "Enc" : 
								        $this->load->view('admin/v_acabeza',$datos);
										break;
									case "Ven" : 
								        $this->load->view('admin/v_acabeza',$datos);
										break;
								    }
					}
					else
					{
						$this->load->view('publico/v_index');
					}
	}
}

