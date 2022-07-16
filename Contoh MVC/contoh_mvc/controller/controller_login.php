<?php
	//include class model
	include "model/model_login.php";
	
	class controller_login{
		//variabel public
		public $ml;
		
		//inisialisasi awal untuk class
		function __construct(){
			$this->ml = new model_login(); //deklarasi object baru dr class model_login
		}
		
		function viewAll(){
			$data = $this->ml->selectAll(); //memanggil method selectAll() milik class model_login
			include "view/view_login_select.php"; //load page view_login_select.php
		}
		
		function viewInsert(){
			include "view/view_login_insert.php"; //load page view_login_insert.php
		}
		
		function delete($x){
			$delete = $this->ml->delete($x);
			//$this->ml->delete($x);
			header("location:main_login.php");
		}
		
		function insert(){
			$user = $_POST["user"];
			$pass = $_POST["pass"];			
			//$this->ml->insert($user, $pass);
			$insert = $this->ml->insert($user, $pass);
			header("location:main_login.php");
		}
		
		function __destruct(){
		}
	}
?>