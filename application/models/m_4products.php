<?php
class M_4products extends CI_Model {

	public function create_product($values)
    {
		$this->db->insert('product',$values);
		return "El regitro del PRODUCTO '".$values['pro_name']."' ha sido realizado";
    }
	
	public function get_products()
    {    	
    	$this->db->select('*');
        $this->db->from('product');
        $this->db->join('code','code.cod_code = product.cod_original');
        $this->db->join('type','type.typ_code = product.typ_code');
        $this->db->join('brand','brand.bra_code = product.bra_code');
        $query=$this->db->get();
    	return ($query);
    }

    public function delete_product($delete)
    {
    	$this->db->where('pro_code',$delete);
		$this->db->delete('product');
		return "El registro ha sido eliminado";
    }

}
?>
