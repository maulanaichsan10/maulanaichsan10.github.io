<?php 
class Model_kostumer extends CI_model
{
	public function get_data($table)
	{
		return $this->db->get($table);
	}
	public function detail_data($id=NULL){
		$query = $this->db->get_where('tbl_kostumer', array('id_kostumer' => $id)) ->row();
		return $query;
	}
}

?>