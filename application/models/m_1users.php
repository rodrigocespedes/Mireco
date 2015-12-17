<?php
class M_1users extends CI_Model {

	public function create_user($values)
    {
		$this->db->insert('user',$values);
		return "El regitro del USUARIO '".$values['use_firstname']."' ha sido realizado";
    }
	
	public function get_users()
    {
    	return $this->m_refactor->get_table("user");;
    }

    public function edit_user($edit)
    {
    	$this->db->where('use_code',$edit['use_code']);
		$this->db->update('user',$edit);
		
		return "Los datos del usuario '".$edit['use_firstname']."' han sido modificados";
    }

    public function delete_user($delete)
    {
    	$this->db->where('use_code',$delete);
		$this->db->delete('user');
		return "El registro ha sido eliminado";
    }

}
?>
