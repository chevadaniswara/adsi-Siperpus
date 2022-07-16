<?php

include "connect.php";
session_start();


if (isset($_POST['inp_submit'])){
    $user = $_POST['inp_user'];
    $password = $_POST['inp_pass'];
    
    $sql = "SELECT * FROM login WHERE username='$user' and password='$password'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()){
        echo "<script>window.location.href='home.php'</script>";
        }
    }
    else{
        echo "Tidak ditemukan";
    }
}

$_SESSION['username'] = $user;

$conn->close();
?>