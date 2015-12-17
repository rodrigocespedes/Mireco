<?php
class M_3typesbrands extends CI_Model {

	public function create_type($values)
    {
		$this->db->insert('type',$values);
		return "El regitro del CODIGO '".$values['typ_name']."' ha sido realizado";
    }

    public function create_brand($values)
    {
		$this->db->insert('brand',$values);
		return "El regitro del CODIGO '".$values['bra_name']."' ha sido realizado";
    }
	
	public function get_types()
    {
    	return $this->m_refactor->get_table("type");;
    }

    public function get_brands()
    {
    	return $this->m_refactor->get_table("brand");;
    }

    public function delete_type($delete)
    {
    	$this->db->where('typ_code',$delete);
		$this->db->delete('type');
		return "El registro ha sido eliminado";
    }

    public function delete_brand($delete)
    {
    	$this->db->where('bra_code',$delete);
		$this->db->delete('brand');
		return "El registro ha sido eliminado";
    }

}
?>
