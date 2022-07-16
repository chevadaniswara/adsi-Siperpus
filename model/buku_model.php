<?php
    class model_buku {
        public $conn;

        function __construct(){
            $this->conn=new mysqli("localhost", "root", "", "pemweb_siperpus");
            if ($this->conn->connect_error){
                die("Connection failed: ".$conn->connect_error);
            }
        }

        function execute($query){
            return $this->conn->query($query);
        }

        function selectAll(){
            $query = "select * from tbl_buku";
            return $this->execute($query);
        }

        function select_peminjaman(){
            $query = "select id_peminjaman from tbl_peminjaman";
            return $this->execute($query);
        }

        function select_id($idbuku){
            $query = "select * from tbl_buku where id_buku='$idbuku'";
            return $this->execute($query);
        }

        function select_maxid($id){
            $query = "select max(id_peminjaman) as num_id from tbl_peminjaman where id_peminjaman='$id'";
            return $this->execute($query);
        }

        function selectJudul($judul){
            // $keyword = $_POST['keyword'];
            $query = "select * from tbl_buku where judul like '%$judul%'";
            // return $this->execute($query);
            return $this->execute($query);
            // if ($result->num_rows > 0) {
            //     while($row = $result->fetch_assoc()){
            //         return '1';
            //     }
            // }
            // else{ 
            //     return '0';
            // }
            
        }

        function insertPeminjaman($id, $idbuku, $npm, $tgl){
			$query = "INSERT INTO tbl_peminjaman VALUES ('$id', '$idbuku', '$npm', '$tgl')";
			return $this->execute($query);
		}

        function delete($x){
            $query = "delete from tbl_buku where id_buku='$x'";
            return $this->execute($query);
        }

        function fetch($var){
            return $var->fetch_assoc();
        }

        function __destruct()
        {
            //kosong
        }
    }
?>