<?php
	//include class model
	include "model/model_mhs.php";
	
	class controller_mhs{
		//variabel public
		public $mm;
		
		//inisialisasi awal untuk class
		function __construct(){
			$this->mm = new model_mhs(); //deklarasi object baru dr class model_login
		}
		
		function viewAll(){
			$data = $this->mm->selectAll(); //memanggil method selectAll() milik class model_login
			include "view/view_mhs_select.php"; //load page view_login_select.php
		}
		
		function viewInsert(){
			include "view/view_mhs_insert.php"; //load page view_login_insert.php
		}
		
		function delete($x){
			$delete = $this->mm->delete($x);
			//$this->ml->delete($x);
			header("location:main_mhs.php");
		}
		
		function insert(){
			$npm = $_POST["npm"];
			$nama = $_POST["nama"];			
			//$this->ml->insert($user, $pass);
			$insert = $this->mm->insert($npm, $nama);
			header("location:main_mhs.php");
		}
		
		function __destruct(){
		}
	}
?>