<?php
class M_refactor extends CI_Model {

public function get_table($table)
    {    	
        $this->db->select('*');
        $query = $this->db->get($table);
    	return ($query);
    }
}
?>
