<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {
	
	/**
		* @Author				: Localhost {Ferdhika Yudira}
		* @Email				: fer@dika.web.id
		* @Web					: http://dika.web.id
		* @Date					: 2016-04-14 18:34:26
	**/

	function __construct(){
		parent::__construct();
		$this->load->model('m_mahasiswa');
	}

	public function index(){
		
	}

	public function getMhsAct(){
		$data = $this->m_mahasiswa->getMhsAct();

		$this->output
	    ->set_content_type('application/json')
	    ->set_output(json_encode($data));
	}

}	