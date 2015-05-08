<form action="" method="post">
	<div class="columnContainer">
		<div class="column">	
			<p>Member Status: 
				<select>
					<option value="">Please Select One</option>
					<option value="Php value">Php Values</option>
				</select>
			</p>
			<p>First Name :<input type="text" name="first"> </p>
			<p>Last Name :<input type="text" name ="last"> </p>
			<p>Gender :
				<select>
					<option value="">Please Select One</option>
					<option value="Male">Male</option>
					<option value="Female">Female</option>
				</select>
			</p>		
		</div><!-- close column-->
		<div class="column">
			<p>Please Enter Contact Information <span class="important"> (at least one)</span></p>
			<!--Php must verify that at least one form of contact of information is given -->
			<p>Email: <input type="text" name="email"></p>
			<p>Home Phone: <input type="text" name="hPhone"></p>
			<p>Work Phone: <input type ="text" name="wPhone"></p>
			<p>Cell PHone: <input type="text" name="cPhone"></p>
			<!--The radio button for opting in/out of texting should be greyed out if 
				Cell phone information is not entered -->
			<p class="smallFont">Receive Text Messages? </p>
			<div class="smallFont">
				<p class="text"><input type="radio" name="text" value="Yes"> Yes</p>
				<p class="text"><input type="radio" name="text" value="No"> No</p>
			</div>
			<div class="clear"></div>
			<div class="miniColumn">
				<p>Address: </p>
				<p>City: </p>
				<p>State: </p>
				<p>Zip:  </p>
			</div><!-- close minicolumn-->
			<div class="miniColumn">
				<p><input type="text" name="street"></p>
				<p><input type="text" name="city"></p>
				<p><input type="text" name="state"></p>
				<p><input type="text" name="zip"></p>
			</div><!-- close minicolumn-->
		</div><!-- close column-->
	</div><!-- close columnContainer -->
</form>

</div><!-- close main_inner-->
</div><!-- close main-->
</div><!-- close content_inner-->
</div><!-- close content-->

	<div id="footer"> <!-- The footer section repeats menu options in a static/non-hover view -->
		<div id="footer_inner">
			<span class="button"><input type="button" name="back" value="Back"></span>
			<span class="button"><input class="floatRight" type="button" name="continue" value="Continue"></span>
		</div>
	</div>
				