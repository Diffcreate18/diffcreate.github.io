<?php
include "config.php";
if ($_POST['cek'] == 'tphide') {
      $nama = $_POST['nama'];
      $kota = $_POST['kota'];
      $email = $_POST['email'];
      $notelp = $_POST['notelp'];
      $ktp = $_POST['ktp'] ;
      $tp = $_POST['tp'];
    
        // Ini code untuk memasukkan data ke database
    if ($tp == "abc") { //Ini untuk menvalidasi ketika memasukkan kode redeem
            $tps = 400000 * (30/100);
            $tpsa = 400000 - $tps;
            $random_alpha = md5(rand());
            $kode = substr($random_alpha, 1, 20);
            $sql = "INSERT INTO users (nama, kota, email, notelp, ktp, tp, kode)
                    VALUES ('$nama', '$kota', '$email', '$notelp', '$ktp', '$tpsa','$kode')";
            $result = mysqli_query($conn, $sql);
            mysqli_close($conn);
            echo "<script>alert('Kode redeem berhasil');
            window.location.href = 'sukses/loading.php';</script>";
        }else if ($tp == "bcd") {
            $tps = 300000 * (5/100);
            $tpsa = 300000 - $tps;
            $random_alpha = md5(rand());
            $kode = substr($random_alpha, 1, 20);
            $sql = "INSERT INTO users (nama, kota, email, notelp, ktp, tp, kode)
                    VALUES ('$nama', '$kota', '$email', '$notelp', '$ktp', '$tpsa','$kode')";
            $result = mysqli_query($conn, $sql);
            mysqli_close($conn);
            header("Location: sukses/loading.php");
            }else
            {
            echo "<script>alert('Kode redeem Salah');
            window.location.href = 'order.php';</script>";
            }

      }else {
        $random_alpha = md5(rand());
        $kode = substr($random_alpha, 1, 20);
        $nama = $_POST['nama'];
        $kota = $_POST['kota'];
        $email = $_POST['email'];
        $notelp = $_POST['notelp'];
        $ktp = $_POST['ktp'] ;
        $tp = $_POST['tp'];
        
        $sql = "INSERT INTO users (nama, kota, email, notelp, ktp, tp, kode)
                VALUES ('$nama', '$kota', '$email', '$notelp', '$ktp', '400000','$kode')";
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        header("Location: sukses/loading.php");
      }
?>