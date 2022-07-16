<?php
    include "model/buku_model.php";

    class controller_buku{

        public $bm;

        function __construct()
        {
            $this->bm=new model_buku();
        }

        function viewCariBuku(){
            $data = $this->bm->selectAll();
            include "view/cari_buku.php";
        }

        function viewDetailBuku($judul){    
            $data = $this->bm->selectJudul($judul);
            include "view/detail_buku.php";
        }

        function viewRekamPinjam($idbk){
            $data = $this->bm->select_id($idbk);
            include "view/rekam_pinjam.php";
        }

        function viewHomePage(){
            // $data = $this->bm->selectAll();
            include "view/homepage.php";
        }
        
        // function insertPeminjaman(){
        //     $idbuku = $_POST["inp_idbuku"];
        //     $npm = $_POST["inp_npm"];
        //     $tgl = $_POST["inp_tgl"];
        //     $insert = $this->bm->insertPeminjaman($idbuku, $npm, $tgl);
        //     header("location:main_homepage.php");
        // }

        function insertPeminjaman(){
            $idbuku = $_POST["inp_idbuku"];
            $npm = $_POST["inp_npm"];
            $tgl = $_POST["inp_tgl"];
            $id;
            //mencari ID
            $data = $this->bm->select_peminjaman();
            if ($data->num_rows > 0) {
                while($row = $this->bm->fetch($data)){
                    $data_id = $this->bm->select_maxid($row['id_peminjaman']);
                    if ($data_id->num_rows > 0) {
                        while($row = $this->bm->fetch($data_id)){
                            $idtemp = (int)$row['num_id'];
                            $idtemp++;
                            $idtemp2 = str_pad($idtemp,4,"0", STR_PAD_LEFT);
                            $id = $idtemp2;
                        }
                    }

                }
            }else{
                $id = '0001';
            }
            $insert = $this->bm->insertPeminjaman($id, $idbuku, $npm, $tgl);
            $message = "Rekam peminjaman berhasil";
            echo "<script type='text/javascript'>alert('$message');</script>";
            header("location:main_homepage.php");
        }

        function __destruct()
        {
            //kosong
        }
    }
?>