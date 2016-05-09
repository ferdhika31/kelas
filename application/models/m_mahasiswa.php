<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_mahasiswa extends CI_Model{
	
	/**
		* @Author				: Localhost {Ferdhika Yudira}
		* @Email				: fer@dika.web.id
		* @Web					: http://dika.web.id
		* @Date					: 2016-04-14 16:48:55
	**/

	function __construct(){
		parent::__construct();

		$this->tb_mhs = "mahasiswa";
	}

	public function getMhsAct(){
		$query = $this->db->get_where($this->tb_mhs,array('stt'=>1))->result_array();

		return $query;
	}

}