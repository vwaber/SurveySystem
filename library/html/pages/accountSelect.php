<div class="center">
	<p> Please Select Your Account From The List Below </p>	
	<form action="" method="post">
<?php
$rows = $DB->select('Members');
foreach($rows as $row)
	{
	$memberID = $row['MemberID'];
	$member = $row['LName'].', '.$row['FName'];
	?>
	<p><input type="radio" name="user" value="<?php echo $memberID ?>"><?php echo $member ?> </p>
	<?php
	}
?>
		
		<p class="center">Account Not Listed?  
			<input type="button" name="newMember" value="Create New Member Account">
		</p>
	</form>	
</div>	


</div><!-- close main_inner-->
</div><!-- close main-->
</div><!-- close content_inner-->
</div><!-- close content-->

<div id="footer"> <!-- The footer section repeats menu options in a static/non-hover view -->
	<div id="footer_inner">
		<form action="" method ="post">
			<span class="button"><input type="button" name="back" value="Back"></span>
			<span class="button"><input class="floatRight" type="button" name="continue" value="Continue"></span>
		</form>
	</div><!-- Close footer_inner -->
</div><!-- Close footer -->