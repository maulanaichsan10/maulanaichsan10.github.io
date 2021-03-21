<?php 
class Model_checkout extends CI_model
{
	public function get_data($table)
	{
		return $this->db->get($table);
	}
	public function update_data($table,$data,$where){
		$this->db->update($table,$data,$where);
	}
    public function detail_data($id=NULL){
		$query = $this->db->get_where('tbl_checkout', array('id_checkout' => $id)) ->row();
		return $query;
	}
	
}

?>