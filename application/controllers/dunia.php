<?php
class dunia extends CI_Controller{
	


	function index() {
		$this->load->model('model_barang');
		$judul = "Daftar barang";
		$data ['judul'] = $judul;
		$data ['barang'] = $this-> model_barang->list_barnag();
	       $this->load->view('list_barnag',$data);
	}
	function edit() {


		echo $this->uri->segment(2); 
	       //echo "lalaalaal";
	}
}