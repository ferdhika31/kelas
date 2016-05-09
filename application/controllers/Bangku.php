<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once (dirname(__FILE__) . "/Main.php");

class Bangku extends Main {
	
	/**
		* @Author				: Localhost {Ferdhika Yudira}
		* @Email				: fer@dika.web.id
		* @Web					: http://dika.web.id
		* @Date					: 2016-04-14 16:20:41
	**/

	function __construct(){
		parent::__construct();
		$this->load->model('m_mahasiswa');
	}

	public function index(){
		$this->global_data['title'] = "Generate Bangku v1";
		$this->global_data['description'] = "Generate bangku secara otomatis.";
		$this->global_data['stt'] = "bangkuSatu";

		$data = $this->m_mahasiswa->getMhsAct();

		shuffle($data);

		$this->global_data['data'] = $data;


		$this->tampilan('bangku/satu');
	}

	public function dua(){
		$this->global_data['title'] = "Generate Bangku v1";
		$this->global_data['description'] = "Generate bangku secara otomatis.";
		$this->global_data['stt'] = "bangkuDua";

		$data = $this->m_mahasiswa->getMhsAct();

		$bangku = array();

		for($i=1;$i<=count($data);$i++){
			$bangku[] = $i;
		}

		shuffle($bangku);

		$this->global_data['bangku'] = $bangku;


		$this->tampilan('bangku/dua');
	}

}	