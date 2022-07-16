<?php
	//include file controller_login.php
	include "controller/controller_mhs.php";
	
	//variabel main merupakan objek baru yang dibuat dari class controller
	$cm = new controller_mhs();
	
	//pilihan menu "tambah" atau "hapus"
    if(isset($_GET["hapus"])){ 
		$npm = $_GET["npm"];
		$cm->delete($npm); //opsi untuk hapus login 
	}else if(isset($_GET["tambah"])){
		$cm->viewInsert(); //opsi untuk menampilkan view login insert
	}else{
		$cm->viewAll(); //opsi untuk menampilkan view login list... ini adalah kondisi default
	}
?>