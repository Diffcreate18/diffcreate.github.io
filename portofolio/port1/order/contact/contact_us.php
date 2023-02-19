<?php
include("../config.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>JOGJA HERITAGE PAYMENT</title>

	<link rel="stylesheet" type="text/css" href="contact.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body id="container" style="background-color: black">
	<div class="shape-blob"></div>
	<div class="shape-blob one"></div>
	<div class="shape-blob three"></div>
	<div class="shape-blob two"></div>
	
		<div class="container-sukses">
			<div class="brd-img-contact1">
				<div class="brd-img-contact2">
					<div class="img-contact">
						<div class="ring"></div>
			    		<img src = "contact.png" style="width: 65px; height: 65px;">
			    	</div>
				</div>
			</div>

			<!-- Ini adalah form contact us -->
			<div class="table-form">
				<h2 class="title-checklist">Contact Us</h2>

				<table class="table-contact" style="width: 400px; height: 350px";>
					<form method="POST" action="proses.php">
						<tr class="baris1">
							<td class="sel1">Name</td>
							<td class="sel2">:</td>
							<td class="sel3"><input type="text" name="name" class="nama-contact" placeholder="Enter Your Name" style="color:white ;"></td>
						</tr>
						<tr class="baris2">
							<td class="sel4">Email</td>
							<td class="sel5">:</td>
							<td class="sel6"><input type="Email" name="email" class="email-contact" placeholder="Enter Your Email" style="color:white ;"></td>
						</tr>
						<tr class="baris3">
							<td class="sel7">Message</td>
							<td class="sel8">:</td>
						</tr>
							<tr>
							<td colspan="3" class="sel9" style="border-bottom:none ;"><textarea name="msg" placeholder="Enter Your Message" ></textarea></td>
							</tr>
						</table>
				
							<div class="btn-contact">
						<button type="button" onclick="window.location.href='../../index.php'" style="margin-right:10px ;width:13rem;">Back</button>
						<button type="submit" name="submit" value="submit" style="width:13rem">Send</button>
					</form>
				</div>
			</div>

		</div>




</body>
</html>