<html>
    <head>
        <style>
            body{
                margin: 0;
                padding: 0;
                font-family: sans-serif;
                background-color: white;
                background-size: cover;
            }
            .header {
                padding: 10px 16px;
                background: #555;
                color: #f1f1f1;
            }
            .container_card{
                display: flex;
                justify-content: center;
            }
            .card{
                background: gray;
                width: 270px;
                height: 350px;
                margin: 10px;
                border-radius: 15px;
                text-align: center;
            }
            .card a{
                background: black;
                color: white;
                padding: 15px 20px;
                display: block;
                margin: 20px 50px;
                margin-top: 100px;
            }
            .gambar_card{
                background-color: papayawhip;
                height: 150px;
                margin-bottom: 15px;
                text-align: center;
            }
            table, td, th{
                border: 1px solid black;
                text-align: center;
            }
            table{
                border-collapse: collapse;
                width: 50%;
            }
            /** PAGE */

            #page {
                overflow: hidden;
                width: 1120px;
                margin: 0px auto;
                padding: 50px 40px;
                color: black;
            }
            /** CONTENT */

            #wide-content {
                padding: 50px;
                border: 10px solid #f1f1f1;
            }

            #wide-content h2 {
                padding: 0px 0px 20px 0px;
                letter-spacing: -1px;
                font-size: 36px;
                color: #222222;
            }
        </style>
        <div class="header" id="myHeader">
            <h2><center>SIPERPUS</center></h2>
        </div>
    </head>
    <body>
        <div id="page">
        <div class="main_konten">
                <center><h1>DETAIL BUKU</h1></center>
                <div id="wide-content">
                    <div>
                        <?php
                        $tampil_judul;
                        $tampil_id;
                        $tampil_penulis;
                        $tampil_rincian;
                            if($row=$this->bm->fetch($data)){
                                $tampil_judul = $row["judul"];
                                $tampil_id = $row["id_buku"];
                                $tampil_penulis = $row["penulis"];
                                $tampil_rincian = $row["rincian"];
                                echo $tampil_penulis;
                            } else {
                                $message = "Buku tidak ada";
                                echo "<script type='text/javascript'>alert('BUKU GAADA');</script>";
                                header("location:main_buku.php");
                            }
                            
                        ?>

                        <h2><?php echo $tampil_judul; ?></h2>
                        <h3>Kode Buku: <?php echo $tampil_id; ?></h3>
                        <img src="images/pic01.jpg" alt="" width="300" height="186" class="alignleft" />
                        <br>
                        <p>
                        <?php 
                            echo $tampil_rincian;
                            // echo "<a href='main_buku.php?pinjam=&idbk=".$tampil_id."'>Pinjam Buku</a>";
                        
                        ?>
                        </p>
                        <?php
                            echo "<a href='main_buku.php?pinjam=&idbk=".$tampil_id."'>Pinjam Buku</a>";
                        ?>
                    </div>
			    </div>
        </div>
        </div>
    </body>
</html>