<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {
	public function index(){
		$data = $this->mymodel->GetTmahasiswa();
		$this->load->view('tabel',array('data'=> $data));
	}
	public function add_data(){
		$this->load->view('form_add');
	}
	public function do_insert(){
		echo "<pre>";
		print_r($_POST);
		echo "<pre>";
	}

}