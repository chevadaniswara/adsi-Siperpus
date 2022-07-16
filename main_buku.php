<?php
    include "controller/buku_controller.php";

    $bc = new controller_buku();

        if (isset($_GET["cari"])) {
            $judul = $_GET["judulbk"];
            $bc->viewDetailBuku($judul); 
        } else if (isset($_GET["pinjam"])){
            $idbk = $_GET["idbk"];
            $bc->viewRekamPinjam($idbk);
        } else {
            $bc->viewCariBuku();
        }
?>