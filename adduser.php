<?php 
require 'function.php';  
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Form-v10 by Colorlib</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/montserrat-font.css">
	<link rel="stylesheet" type="text/css" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="css/styleregister.css"/>
    <link rel="stylesheet" href="css/style.css"/>

     <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Libraries CSS Files -->
<link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<link href="lib/animate/animate.min.css" rel="stylesheet">
<link href="lib/venobox/venobox.css" rel="stylesheet">
<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

<header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <!-- Uncomment below if you prefer to use a text logo -->
        <!-- <h1><a href="#main">C<span>o</span>nf</a></h1>-->
        <a href="http://localhost/crudwithimages/main.html" class="scrollto"><img src="img/logo_white.png" alt="" title=""></a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="http://localhost/crudwithimages/rikhai.html">Home</a></li>
          <li><a href="http://localhost/crudwithimages/rikhai.html #about">About</a></li>
          <li><a href="http://localhost/crudwithimages/rikhai.html #speakers">Event Detail</a></li>
          <li><a href="http://localhost/crudwithimages/rikhai.html #schedule">Event Schedule</a></li>
          <li><a href="http://localhost/crudwithimages/rikhai.html #venue">EVENT Venue</a></li>
          <li><a href="http://localhost/crudwithimages/rikhai.html #hotels">Hotels</a></li>
          <li><a href="http://localhost/crudwithimages/rikhai.html #cafe">Cafe&Res</a></li>
          <li><a href="http://localhost/crudwithimages/rikhai.html #contact">Contact</a></li>
          <li class="buy-tickets"><a href="http://localhost/crudwithimages/rikhai.html #buy-tickets">Buy Now</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->
<body class="form-v10">
	<div class="page-content">
		<div class="form-v10-content">
        <form class="form-detail" action="" method="post" enctype="multipart/form-data">

				<div class="form-left">
					<h2>General Infomation</h2>
					<div class="form-row">
						<select id="title_name" name="title_name" for="title_name">
							<option class="option"  value="" disabled selected>Select Your Title Name</option>
						    <option class="option" value="boy">Boy</option>
						    <option class="option" value="girl">Girls</option>
						    <option class="option" value="mr">Mr</option>
						    <option class="option" value="ms">MS</option>
							<option class="option" value="mrs">Mrs</option>
						</select>
						
					</div>
					<div class="form-group">
						<div class="form-row form-row-1" for="name">
							<input  for="name"  type="text" class="input-text" id="name" name="name"  title="กรุณากรอกชื่อจริง" placeholder="Firstname"  required>
						</div>
						<div class="form-row form-row-2"  for="lastname"  >
							<input   for="lastname" type="text"  class="input-text" id="lastname" name="lastname" title="กรุณากรอกนามสกุล" placeholder="Lastname"   required>
						</div>
					</div>
					<div class="form-row">
						<select name="gender" for="gender"  id="gender"  >
							<option class="option"  value="" disabled selected>Select your Gender</option>
						    <option class="option" value="male">Male</option>
						    <option class="option" value="female">Female</option>
						</select>
						
					</div>
					<div class="form-row">
						<input  for="nation"  type="text" class="input-text" id="nation" name="nation"  title="กรุณากรอกสัญชาติ" placeholder="Nation"  required>
					</div>
					<div class="form-row">
						<input  for="id_card"  type="number" class="input-text" id="id_card" name="id_card"  pattern="[0-9]{13}" maxlength="13"  title="กรุณากรอกเลขบัตรประชาชน 13 หลัก" placeholder="ID CARD NUMBER / Passport "  required>
					</div>
					<div class="form-row">
						<select name="age_range" for="age_range"  id="age_range"  >
							<option value="" disabled selected>Selet your Age Range</option>
							<option class="option" value="5 - 8 ปี ">5 - 8 ปี</option>
							<option class="option" value="8 - 10 ปี">8 - 10 ปี</option>
							<option class="option" value="10 - 12 ปี">10 - 12 ปี</option>
							<option class="option" value="ผู้ปกครอง">Adult</option>
						</select>
						
					</div>
					<div class="form-group">
						<div class="form-row form-row-3">
							<input  for="dob"  type="date" class="input-text" id="dob" name="date"  title="กรุณาเลือกวันเดือนปีเกิด" placeholder="Date of Bird"  required>
						</div>
						
						<div class="form-row form-row-4">
							<input  for="age"  type="text" class="input-text" id="age" name="age"  title="กรุณากรอกอายุ" placeholder="Age"  required>
						</div>
					</div>
					<div class="form-row">
						<input  for="med"  type="text" class="input-text" id="med" name="med"    title="กรุณากรอกโรคประจำตัว" placeholder="Medical Condition"  required>
					</div>
					<div class="form-row">
						<select name="blood" for="blood"  id="blood"  >
							<option class="option" value="" disabled selected>Select your Blood Group</option>
							<option class="option" value="A">A</option>
							<option class="option" value="B">B</option>
							<option class="option" value="O">O</option>
							<option class="option" value="AB">AB</option>
						</select>
						<span class="select-btn">
						  	<i class="zmdi zmdi-chevron-down"></i>
						</span>
					</div>
				</div>
				<div class="form-right">
					<h2>Contact Details</h2>
					<div class="form-row">
						<input  for="address"  type="text" class="input-text" id="address" name="address"  title="กรุณากรอกที่อยู่" placeholder="Address"  required>
					</div>
					<div class="form-row">
						<input  for="tel"  type="text" class="input-text" id="tel" name="tel"  title="กรุณากรอกอายุ" placeholder="Phone Number" pattern="[0-9]{10}" maxlength="10"  required>
					</div>
					<div class="form-row">
						<input  for="ems_con"  type="text" class="input-text" id="ems_con" name="ems_con"  title="ผู้ติดต่อฉุกเฉิน" placeholder="Emergency contact"  required>
					</div>
					<div class="form-row">
						<input  for="ems_tel"  type="text" class="input-text" id="ems_tel" name="ems_tel"  title="เบอร์ผู้ติดต่อฉุกเฉิน" placeholder="Telephone Emergency contact"  required>
					</div>
			 
					<div class="form-row">
						<select name="country">
							<option value="" disabled selected>Size Shirt</option>
							<option class="option" value="3XS">3XS - 32" x 24" </option>
							<option class="option" value="2XS">2XS - 34" x 25"</option>
							<option class="option" value="XS">XS - 36" x 26"</option>
							<option class="option" value="S">S - 38" x 27"</option>
							<option class="option" value="M">M - 40" x 28"</option>
							<option class="option" value="L">L - 42" x 29"</option>
							<option class="option" value="XL">XL - 44" x 30"</option>
							<option class="option" value="2XL">2XL - 46" x 31"</option>
							<option class="option" value="3XL">3XL - 48" x 32"</option>
						</select>
						<span class="select-btn">
						  	<i class="zmdi zmdi-chevron-down"></i>
						</span>
					</div>
                    <div class="form-row">
						<center><span>Payment Accepted Here</span></center>
					</div>
					<div class="form-group">
					
						<div class="form-row form-row-5">
							<img src="img/money.png" alt="QR Code Image" class="img-fluid mx-auto d-block" >
						</div>
						
						<div class="form-row form-row-6">
							 
							<span>Bangkok Bank</span>
                            <span>757-0138-912</span>
                            <span>Akaradecth Potikul</span>    
						</div>

					</div>
					<div class="form-row">
						<input  for="file"  type="file" class="input-text" id="file" name="file"  title="แนบสลิปโอนเงิน" placeholder="file"  required>
					</div>
					<div class="form-checkbox">
						<label class="container"><p>I do accept the <a href="#" class="text">Terms and Conditions</a> of your site.</p>
						  	<input type="checkbox" name="checkbox" required>
						  	<span class="checkmark"></span>
						</label>
					</div>
					 
					<div class="form-row-last">
                    <input type="submit" name="submit" class="register" value="Register">
					</form>
					</div>
				</div>
			</form>
		</div>
	</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
	 <!-- JavaScript Libraries -->
	 <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/venobox/venobox.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>