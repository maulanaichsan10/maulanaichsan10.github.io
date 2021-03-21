<?php 
class Model_p_rumahan extends CI_model
{
	public function get_data($table)
	{
		return $this->db->get($table);
	}
	public function insert_data($data,$table){
		$this->db->insert($table,$data);
	}
	public function update_data($table,$data,$where){
		$this->db->update($table,$data,$where);
	}
	public function delete_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	public function detail_data($id=NULL){
		$query = $this->db->get_where('tbl_produk_rumahan', array('id_p_rumahan' => $id)) ->row();
		return $query;
	}
}

?>