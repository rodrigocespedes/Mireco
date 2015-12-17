<?php
class M_5storages extends CI_Model {

	public function addNewListStorages($today)
    {
    	$sto_code = $this->createStorage($today);
		foreach($this->cart->contents() as $cart)
		{
			$storage=array(
				'pro_code'=> $cart["id"],
				'sto_code'=> $sto_code,
				'ps_quantity'=> $cart["qty"],
				'ps_price'=> $cart["price"]	);

			$this->db->insert('product_storage',$storage);
		}
		return "Regitro realizado";
    }

    public function createStorage($today)
    {
    	$storage=array(
				'sto_date'=> $today
        );
    	$this->db->insert('storage',$storage);
		$this->db->select('sto_code');
    	$this->db->order_by('sto_code','desc');
    	$this->db->limit('1');
    	$query=$this->db->get('storage');
    	foreach($query->result_array() as $fila)
		{
			$cod = $fila['sto_code'];
		}
    	return ($cod);
    }
	
	public function get_storage()
    {    	
    	$this->db->select('*');
        $this->db->from('storage');
        $query=$this->db->get();
    	return ($query);
    }


}
?>
