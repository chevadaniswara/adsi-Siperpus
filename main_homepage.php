<?php
    include "controller/buku_controller.php";

    $bc = new controller_buku();

        if (isset($_GET["cari"])) {
            $bc->viewCariBuku(); 
        } else {
            $bc->viewHomePage();
        }
?>