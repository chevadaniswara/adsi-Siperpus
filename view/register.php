<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <!-- <link rel="stylesheet" href="reg_style.css"> -->
    <div class="header" id="myHeader">
      <h2><center>SIPERPUS</center></h2>
    </div>
    <style>
      @import "https://use.fontawesome.com/releases/v5.5.0/css/all.css";
      body{
        margin: 0;
        padding: 0;
        font-family: sans-serif;
        background-color: rgb(255, 255, 255);
        background-size: cover;
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

      .header {
        padding: 10px 16px;
        background: #555;
        color: #f1f1f1;
      }
    </style>
  </head>
  <body>
    <!-- texbox login -->
    <form action="" method="POST">
    <div class="login-box">
      <h1>Registrasi</h1>
      <div class="textbox">
        <i class="fas fa-user"></i>
        <input type="text" name="inp_username" placeholder="Username">
      </div>
    <!-- textbox password -->
      <div class="textbox">
        <i class="fas fa-lock"></i>
        <input type="password" name="inp_password" placeholder="Password">
      </div>
    <!-- textbox npm -->
      <div class="textbox">
        <i class="fas fa-user"></i>
        <input type="text" name="inp_npm" placeholder="NPM">
      </div>
      <!-- <a href="main_login.php?login=ok"><input type="button" class="btn" name="btn_register" value="Submit"></a> -->
      <input type="submit" class="btn" name="btn_submit" value="Submit">
    </div>
    </form>
  </body>
</html>
<?php
	if (isset($_POST["btn_submit"])) { 
    $uname = $_POST["inp_username"];
    $pass = $_POST["inp_password"];
    $npm = $_POST["inp_npm"];
    $cl2 = new login_controller();
    $cl2->insert($uname, $pass, $npm);
  }
?>