<?php
class M_2codes extends CI_Model {

	public function create_code($values)
    {
		$this->db->insert('code',$values);
		return "El regitro del CODIGO '".$values['cod_name']."' ha sido realizado";
    }
	
	public function get_codes()
    {
    	return $this->m_refactor->get_table("code");;
    }

    public function edit_code($edit)
    {
    	$this->db->where('cod_code',$edit['cod_code']);
		$this->db->update('code',$edit);
		return "Los datos del CODIGO '".$edit['cod_name']."' han sido modificados";
    }

    public function delete_code($delete)
    {
    	$this->db->where('cod_code',$delete);
		$this->db->delete('code');
		return "El registro ha sido eliminado";
    }

}
?>
