<?php
	require 'header.php'
?>
<p>Submit your Email to join Techland</p>

<div class="signup">
	<div class="row">
		<div class="col-lg-12" id="category">
			Before you can join Techland, you need to sign up. Please signup below:
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12"> 
			<form action="includes/usersignup.inc.php" class="signupform" method="POST">
				<input type="text" name="first" placeholder="First Name">
				<input type="text" name="last" placeholder="Last Name">
				<input type="text" name="email" placeholder="Email">
				<input type="text" name="uid" placeholder="Username">
				<input type="Password" name="pwd" placeholder="Password">
				<button type="submit" name="signup-submit">Sign Up</button>
			</form>
		</div>
	</div>
</div>

<footer>
	<div class="pagefooter">
		<div class="row">
			<div class="col-lg-12">
				<form action="">
					<input type="text" name="question" size="64">
					<button type="submit" name="submit">Search</button>
				</form>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<a href="">Techland</a> - Copyright © 2005 - 2019 
				<a href="facebook.com/stephenjohnson01">Falodu Stephen Abimbola</a>. All rights reserved
				See <a href="">How to Advertise</a>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				Disclaimer: Every Techland member is solely responsible for anything that he/she posts or uploads on Techland.
			</div>
		</div>
	</div>
</footer>


</body>
<!-- Latest compiled and minified JavaScript -->
<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</html>