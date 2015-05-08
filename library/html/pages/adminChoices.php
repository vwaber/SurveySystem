<h1 class="floatLeft">Section: </h1>
<select id="section"><!-- Dropdown menu for survey sections -->
	<option value=""><!-- initial value -->
		Please Select A Section
	</option>
	<option value="Php Section Name">
		Php Section Name
	</option>
</select>
<div class="clear"></div>
<table border=""><!--Table displays Section Answers -->
	<colgroup>
		<col span="1" class="position">
		<col span="1" class="choiceDesc">
		<col span="2" class="userGroups">
		<col span="1" class="removeButton">
	</colgroup>
	<tr><!-- table header -->
		<th class="tableHeader">Position</th>
			<th class="tableHeader">Choice</th>
			<th class="tableHeader">Users Permitted to Answer</th>
			<th class="tableHeader">Type</th>
			<th class="tableHeader">Remove</th>
		</tr>
		<tr><!-- Each row represents a different choice -->
			<td><!--Position -->
				<select><!-- Populate select with all possible positions -->
					<option value="">#</option>
				</select>
				<input type="button" name="#up" value="&#8743;" >
				<input type="button" name="#down" value="&#8744;" class="cell">
			</td>
			<td><!-- Choice Description -->
				<input type="text" name="#textbox" id="textWidth">
			</td>
			<td><!-- Users Authorized to See Choice -->
				<div class="userSpan">
					<input type="checkbox" class="floatLeft" name="#user" value="#user">
					<p class="userText">User Group</p>
				</div>
			</td>
			<td><!--Choice Type: texbox or checkbox -->
				<select class="type">
					<option value="check">CheckBox</option><!--Default Value -->
					<option value="text">Textbox</option>
				</select>
			</td>
			<td>
			<input type="button" class="xButton" name="#remove" value="X">
			</td>
		</tr><!-- close Choice row -->
		<tr><!-- This row holds the "Add a Choice" Button. --> 
			<td><!-- When this button is pressed a new row will appear -->
				<input type="button" name="newChoice" value="Add A New Choice">
			</td>
		</tr>
	</table>
</div><!-- close main_inner-->
</div><!-- close main-->
</div><!-- close content_inner-->
</div><!-- close content-->

<div id="footer"> <!-- The footer section repeats menu options in a static/non-hover view -->
		<div id="footer_inner">
	</div><!-- close footer_inner -->
</div><!-- close footer -->
