<?php
if(isset($_POST['Login']))
{
	//Returns false upon login failure
	$SH->login($_POST['Password'], $DB);	
}
?>

<div class="container">
	<form action="" method="post">
		<h1>Please Enter Password</h1>
		<p class="floatLeft"> Password : <input type="password" name="Password">
		<input type="submit" name="Login" value="Enter"> </p>
	</form>
</div><!-- Close container -->
<div class="container">
	<a href="" class="link">Forgot Password</a>
</div><!-- Close container -->

</div><!-- close main_inner-->
</div><!-- close main-->
</div><!-- close content_inner-->
</div><!-- close content-->

<div id="footer"> <!-- The footer section repeats menu options in a static/non-hover view -->
	<div id="footer_inner">
	</div><!-- Close footer_inner -->
</div><!-- Close footer -->