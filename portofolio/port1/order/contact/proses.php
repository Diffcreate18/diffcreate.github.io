<?php
include("../config.php");
// Proses input database Contact us
if (isset($_POST['submit']) && $_POST['submit']) {
    $nama = $_POST['name'];
    $email = $_POST['email'];
    $msg = $_POST['msg']; 

    $sql = "INSERT INTO contact(nama,email,msg) VALUES('$nama','$email','$msg')";
    $result = mysqli_query($conn, $sql);
    echo "<script>alert('Message Sent');
            window.location.href = '../../index.php';</script>";
    }
      ?>