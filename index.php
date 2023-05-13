<?php
$pageJs = ["main.js"];
include('header.php');
$page = 'loginview';
$pageTitle= 'BFIT Registration';
?>
	<div class="page-content">
		<div class="form-v4-content">
			<form class="form-detail" method="post" action='' id="myform"  >
				<h2>REGISTRATION FORM</h2>
				<div class="form-group">
					<div class="form-row form-row-1">
						<label class="form-label" for="first_name">First Name</label>
						<input type="text" name="first_name" id="first_name" class="input-text">
					</div>
					<div class="form-row form-row-1">
						<label class="form-label" for="last_name">Last Name</label>
						<input type="text" name="last_name" id="last_name" class="input-text">
					</div>
					
				</div>
				<div class="form-group">
				<div class="form-row form-row-1">
					<label class="form-label" for="phone">Mobile No:</label>
					<input class="input-text" type="tel" id="phone" name="phone" placeholder="9876543210" pattern="[0-9]{10}" required><br><br>
				</div>
				<div class="form-row form-row-1">
				<label class="form-label " for="prog">Programmes:</label>
					<select class="form-select input-text" id="prog" required onchange="func()" >
						<option value="" disabled selected >Programmes Available</option>
						<option value="bachelor">BFIT Bachelor Programme</option>
						<option value="master">BFIT Master Programme</option>
						<option value="diploma">Diploma in Engineering</option>
						<option value="certdiploma">Certificate Diplomas</option>
					</select>
				</div>
				<div class="form-row form-row-1 dn" id= 'moreopt'>
				</div>
				</div>
				<div class="form-row form-row form-row-1">
					<label  class="form-label"  required for="your_email">Your Email</label>
					<input type="text" name="your_email" id="your_email" class="input-text" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
				</div>
				
				<div class="form-row-last">
					<input type="submit" name="register" class="register" value="Register">
				</div>
			</form>
		</div>
	</div>
<?php

include('footer.php');

?>