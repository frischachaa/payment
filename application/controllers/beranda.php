<?php
class Beranda extends CI_Controller{
	function __construct(){
		parent::__construct();
	}
	function index(){
		$this->load->view('v_beranda');

	}
	function baru(){
		$this->load->view('baruaja');  

	}

}
?>
