<?php
include("../config.php");
header('Refresh: 15; URL=../../index.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>JOGJA HERITAGE PAYMENT</title>
	<link rel="stylesheet" type="text/css" href="scoba.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body id="container">
	<!-- Divs ini untuk background yang bergerak -->
	<div class="shape-blob"></div>
	<div class="shape-blob one"></div>
	<div class="shape-blob three"></div>
	<div class="shape-blob two"></div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    
	<!-- Ini adalah container untuk bukti pembayaran -->
	<div class="container-sukses">
		<div class="checklist">
    		<img src = "https://cdn-icons-png.flaticon.com/512/4470/4470331.png" style="width: 105px; height: 105px;">
    	</div>

		<div class="checklist-form">
			<h2 class="title-checklist">Terimakasih Sudah Memesan Villa Jogja Heritage Site</h2>

			<table class="table-checklist" style="width: 400px; height: 350px";>
				<tr class="baris1">
					<td class="sel1">Nama</td>
					<td class="sel2">:</td>
					
					<td class="sel3"><?php $sql = mysqli_query($conn, 'SELECT * FROM users ORDER BY id DESC LIMIT 1');while ($data= mysqli_fetch_array($sql)){
   					echo $data['nama'];} ?></td>
				</tr>
				<tr class="baris2">
					<td class="sel4">Kota</td>
					<td class="sel5">:</td>
					<td class="sel6"><?php $sql = mysqli_query($conn, 'SELECT * FROM users ORDER BY id DESC LIMIT 1');while ($data= mysqli_fetch_array($sql)){
   					echo $data['kota'];} ?></td>
				</tr>
				<tr class="baris3">
					<td class="sel7">Email</td>
					<td class="sel8">:</td>
					<td class="sel9"><?php $sql = mysqli_query($conn, 'SELECT * FROM users ORDER BY id DESC LIMIT 1');while ($data= mysqli_fetch_array($sql)){
   					echo $data['email'];} ?></td>
				</tr>
				<tr class="baris4">
					<td class="sel10">No. Telp</td>
					<td class="sel11">:</td>
					<td class="sel12"><?php $sql = mysqli_query($conn, 'SELECT * FROM users ORDER BY id DESC LIMIT 1');while ($data= mysqli_fetch_array($sql)){
   					echo $data['notelp'];} ?></td>
				</tr>
				<tr class="baris6">
					<td class="sel16">Harga</td>
					<td class="sel17">:</td>
					<td class="sel18"><?php $sql = mysqli_query($conn, 'SELECT * FROM users ORDER BY id DESC LIMIT 1');while ($data= mysqli_fetch_array($sql)){
   					echo $data['tp'];} ?></td>
				</tr>
				<tr class="baris5">
					<td class="sel13">Kode Reservasi</td>
					<td class="sel14">:</td>
					<td class="sel15"><?php $sql = mysqli_query($conn, 'SELECT * FROM users ORDER BY id DESC LIMIT 1');while ($data= mysqli_fetch_array($sql)){
   					echo $data['kode'];} ?></td>
				</tr>
			</table>
			
			</div>
		</div>

	</div>


</body>
</html>