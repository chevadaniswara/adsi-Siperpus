<?php
	class model_mhs{
		public $conn;
	
		//konstruktor... method yg pertama kali diakses ketika terjadi deklarasi class baru
		function __construct(){
			// buat koneksi
			$this->conn = new mysqli("localhost", "root", "", "coba");
			if ($this->conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}

		}
		
		function execute($query){
			return $this->conn->query($query);
		}
		
		function selectAll(){
			$query = "select * from mhs";
			return $this->execute($query);
		}
		
		function select($x){
			$query = "select * from mhs where npm='$x'";
			return $this->execute($query);
		}
		
		function delete($x){
			$query = "delete from mhs where npm='$x'";
			return $this->execute($query);
		}
		
		function insert($x, $y){
			$query = "insert into mhs values ('$x', '$y')";
			return $this->execute($query);
		}
		
		function fetch($var){
			return $var->fetch_assoc();
		}
		
		//pasangan construct adalah destruct untuk menghapus inisialisasi class pada memori
		function __destruct(){
		}
	}
?>