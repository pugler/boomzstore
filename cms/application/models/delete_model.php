<?php
class Delete_model extends Model {

    function Delete_model() {
        parent::Model();
    }

	function deleteData($where, $table) 
	{
		$data_update = array(
			 'is_delete'	=> 'yes'
		);
	
		$this->db->where('id', $where);
		$this->db->update($table, $data_update); 
	}

	function deletePhotos($where, $table)
	{
		$this->db->where('gallery_id', $where);
		$this->db->delete($table); 	
	}


}

?>