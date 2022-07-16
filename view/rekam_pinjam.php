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
        .login-box{
            width: 280px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            color:slategray;
        }
        .login-box h1{
            float: left;
            font-size: 40px;
            border-bottom: 6px solid #4caf50;
            margin-bottom: 50px;
            padding: 13px 0;
        }
        .textbox{
            width: 100%;
            overflow: hidden;
            font-size: 20px;
            padding: 8px 0;
            margin: 8px 0;
            border-bottom: 1px solid #4caf50;
        }
        .textbox i{
            width: 26px;
            float: left;
            text-align: center;
        }
        .textbox input{
            border: none;
            outline: none;
            background: none;
            color: rgb(36, 36, 36);
            font-size: 18px;
            width: 80%;
            float: left;
            margin: 0 10px;
        }
        .btn{
            width: 100%;
            background: none;
            border: 2px solid #4caf50;
            color: black;
            padding: 5px;
            font-size: 18px;
            cursor: pointer;
            margin: 12px 0;
        }
    </style>
    </head>

    <body>
        <div class="main_konten">
            <center><h1>Rekam Peminjaman Buku</h1></center>
            
            <!-- Tanggalan -->
            <?php
            date_default_timezone_set('Asia/Jakarta');
            $dateNow = new DateTime(date("Y-m-d")); 
            $dateNow = $dateNow->format("Y-m-d");
            ?>

            <form action="" method="POST">
                    <!-- texbox login -->
                <div class="login-box">
                    <div class="textbox">
                        <i class="fas fa-user"></i>
                        <input readonly type="text" name="inp_idbuku" id="textinput-disabled" placeholder="" value="<?php echo $idbk;?>">
                    </div>
                    <!-- textbox password -->
                    <div class="textbox">
                        <i class="fas fa-lock"></i>
                        <input type="text" name="inp_npm" placeholder="NPM Peminjam">
                    </div>
                    <div class="textbox">
                        <i class="fas fa-lock"></i>
                        <input readonly type="text" name="inp_tgl" id="textinput-disabled" placeholder="Tgl Peminjaman" value="<?php echo $dateNow;?>">
                    </div>
                    <input type="submit" class="btn" name="btn_submit" value="Submit">
                    <!-- <input type="button" class="btn" name="btn_register" value="Submit"> -->
                </div>
            </form>
        </div>
    </body>
</html>
<?php
	if(isset($_POST["btn_submit"])){ 
		$bc3 = new controller_buku();
		$bc3->insertPeminjaman();
	}
?>