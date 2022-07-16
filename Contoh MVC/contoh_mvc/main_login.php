<?php
	//include file controller_login.php
	include "controller/controller_login.php";
	
	//variabel main merupakan objek baru yang dibuat dari class controller
	$cl = new controller_login();
	
	//pilihan menu "tambah" atau "hapus"
    if(isset($_GET["hapus"])){ 
		$user = $_GET["user"];
		$cl->delete($user); //opsi untuk hapus login 
	}else if(isset($_GET["tambah"])){
		$cl->viewInsert(); //opsi untuk menampilkan view login insert
	}else{
		$cl->viewAll(); //opsi untuk menampilkan view login list... ini adalah kondisi default
	}
?>