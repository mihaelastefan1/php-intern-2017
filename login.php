<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php include 'C:\xampp\htdocs\lib\header.php'; ?>

<!-- content -->
<div class="wrapper row2">
  <div id="container" class="clear">
    <!-- content body -->
    
    
	<div class="container">
		<form action="login.php" method="get" id="login_form">
			<h1 class="login_heading">Login</h1>

			<fieldset>
				<legend id="subtitle">Please fill in your details</legend>
				<label for="contact_email">Username / Email:</label>
				<input type="email" id="contact_email" name="email1" placeholder="Please add your email address" required>

				<label for="inputParola">Password:</label>
				<input type="password" id="inputParola" name="pass" placeholder="Please add your password" required>
				<span id="spnPhoneStatus"></span>
				
				
			</fieldset>
			
			<button type="submit">Login</button>
		</form>
	</div><!-- container -->

</div>
<!-- footer -->
<?php include 'C:\xampp\htdocs\lib\footer.php'; ?>


</body>
</html>
