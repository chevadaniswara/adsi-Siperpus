<html>
    <head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <div class="header" id="myHeader">
            <h2><center>SIPERPUS</center></h2>
        </div>
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

        tr:hover {background-color: lightblue;}
    </style>
    </head>

    <body>
        <div class="main_konten">
            <center><h1>CARI BUKU</h1></center>
            <center><p>Cari berdasarkan judul</p></center>
            <center><form action="" method="POST">
                <input type="text" name="inp_judul" id="keyword">
                <!-- <a href='main_buku.php?pinjam=&judul=".$_GET["inp_judul"]."'>Cari</a> -->
                <input type="submit" class="btn" name="btn_cari" value="Cari">
            </form></center>
            <center><table>
                <tr>
                    <!-- <th>Kode Buku</th> -->
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Aksi</th>
                </tr>
                <?php
                    while($row=$this->bm->fetch($data)){
                        echo"
                            <tr>
                                <td>".$row["judul"]."</td>
                                <td>".$row["penulis"]."</td>
                                <td class='tab_selengkapnya'><a href='main_buku.php?cari&judulbk=".$row["judul"]."'>Lihat</a></td>  
                            </tr>
                        ";
                    }
                ?>
            </table></center>
        </div>
    </body>
</html>
<?php
	if(isset($_POST["btn_cari"])){ 
		// $bc2 = new controller_buku();
        $judul = $_POST["inp_judul"];
        header("location:main_buku.php?cari=&judulbk=".$judul."");
		// $bc2->viewPinjamBuku($judul);
	}
?>