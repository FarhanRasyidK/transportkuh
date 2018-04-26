<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	
	public function index(){
		$data = $this->mymodel->GetTmahasiswa();
		/*foreach($data as $d){
			echo "Nomor induk : ". $d['NIM'] ."<br />";
			echo "Nama : ". $d['Nama'] ."<br />";
			echo "alamat : ". $d['Alamat'] ."<hr />";
		}*/
		$this->load->view('tabel',array('data'=> $data));
		/*$data = $this->db->query('select * from tmahasiswa');
		foreach($data->result_array() as $d)
		{
			echo "Nomor induk : ". $d['NIM'] ."<br />";
			echo "Nama : ". $d['Nama'] ."<br />";
			echo "alamat : ". $d['Alamat'] ."<hr />";
		}*/
	}

	public function Insert(){
		$res = $this->mymodel->InsertData('tmahasiswa',array(
			"NIM" => "11101110103223",
			"Nama" => "farhan rahman",
			"Alamat" => "cilacap,cilacap",
		));
		if($res >= 1){
			echo "<h2>insert data sukses!!</h2>";
		}else{
			echo "<h2>insert data gagal!!</h2>";
		}
	}

	public function Update(){
			$res = $this->mymodel->UpdateData('tmahasiswa',array(
			"Alamat" => "majenang,cilacap",
		),array('NIM'=>"11101110101223"));
		if($res >= 1){
			echo "<h2>update data sukses!!</h2>";
		}else{
			echo "<h2>update data gagal!!</h2>";
		}
	}

	public function Delete(){
		$res = $this->mymodel->DeleteData('tmahasiswa',array('NIM'=>"11101110103223"));
		if($res >= 1){
			echo "<h2>Delete data sukses!!</h2>";
		}else{
			echo "<h2>Delete data gagal!!</h2>";
		}
	}
	public function Panggil (){
		$data =  $this->db->query("select * from tmahasiswa");
		echo "jumlah data = ".$data->num_rows()."<br />";
		$row = $data->row();
		echo "NO induk = ".$row->NIM."<br />";
		echo "Nama = ".$row->Nama."<br />";
		echo "Alamat = ".$row->Alamat."<br />";
		/*foreach ($data ->result_array() as $row){
			echo "No. induk:".$row['NIM']."<br />";
			echo "Nama:".$row['Nama']."<br />";
			echo "Alamat:".$row['Alamat']."<br />";
			echo "<hr />";
		}*/
	}
	/*{
		$data = array(
			'nama' => 'farhan rasyid',
			'alamat' => 'cilacap',
			'sekolah' => 'SMK Telkom PWT',
		);
		$this->load->view('welcome_message',$data);
		echo base_url();
	}
	
	public function cetak($satu = 'ana',$dua = 'risa')
	{
		//$this->load->view('welcome_message');
		echo 'parameter pertama '.$satu.'<br />';
		echo 'parameter kedua '.$dua.'<br />';*/
}