<form action="" method="post">
	<h2 class="centerFont">Survey Question Goes Here</h2>
	<div class="answersContainer">
		<div class="answers">
		
			<!-- Each bullet div contains a answer option for a question.  The checkbox's
			     name and value attributes will be set by php so that each checkbox has
				 a unique name/value. The h1 tag contains information from the description field
				 for the answer option.-->
		
			<div class="bullet">
				<input class="floatLeft" type="checkbox" name="php name" value="php value"> 
				<p class="floatLeft">Php name should be reprinted here</p>
				<div class="description">
					<img src="question.jpg" alt="Description">
					<h1>Description Information goes here</h1>
				</div><!-- close description -->
			</div><!-- close bullet -->	
		</div><!-- close answers-->
		<div class="filler">
		</div><!-- close filler -->
		<div class="answers">
			<div class="bullet">
				<input class="floatLeft" type="checkbox" name="php name" value="php value"> 
				<p class="floatLeft">Php name should be reprinted here</p>
				<div class="description">
					<img src="question.jpg" alt="Description">
					<h1>Description Information goes here</h1>
				</div><!-- close description -->
			</div><!-- close bullet -->	
			<div class="bullet">	
				<input class="floatLeft" type="checkbox" name="php name" value="php value"> 
				<p class="floatLeft">Php name should be reprinted here</p>
				<div class="description">
					<img src="question.jpg" alt="Description">
					<h1>Description Information goes here</h1>
				</div><!-- close description -->
			</div><!-- close bullet -->
			<div class="bullet">	
				<input class="floatLeft" type="checkbox" name="php name" value="php value"> 
				<p class="floatLeft">Php name should be reprinted here</p>
				<div class="description">
					<img src="question.jpg" alt="Description">
					<h1>Description Information goes here</h1>
				</div><!-- close description -->
			</div><!-- close bullet -->
		</div><!-- close answers-->
	</div><!-- close answersContainer -->
</form>	

</div><!-- close main_inner-->
</div><!-- close main-->
</div><!-- close content_inner-->
</div><!-- close content-->
	
<div id="footer"> <!-- The footer section repeats menu options in a static/non-hover view -->
	<div id="footer_inner">
		<!-- The back button will either return to the previous question page or to the user home page -->
		<span class="button"><input type="button" name="back" value="Back"></span>
		<!-- The back button will either return to the next question page or to the "survey complete" page -->
		<span class="button"><input class="floatRight" type="button" name="continue" value="Continue"></span>
	</div>
</div>