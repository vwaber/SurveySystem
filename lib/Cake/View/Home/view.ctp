<?php
$this->extend('/Common/view');

$this->assign('title', "Survey Home");

/* The menu should not be populated for the survey home page.  
   User does not yet have access to any of the pages. */
$this->start('menu');
$this->end();
?>
<!-- This remaining content should be echoed in the 'content' section -->
<h1>Please Enter Password</h1>
	<p class="floatLeft"> Password : <input type="password" name="Password">
	<input type="submit" name="Login" value="Enter"> </p>
</form>
<a href="" class="link">Forgot Password</a>