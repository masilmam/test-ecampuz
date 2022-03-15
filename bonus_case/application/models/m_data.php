<?php 
 
class M_data extends CI_Model{
	function read(){
		return $this->db->get('instansi');
	}
}