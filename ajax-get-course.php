<?php

$program = $_GET["program"];

if($program == "PG - Master of Business Administration")
{
	?>
	<option value="">Select Course</option>
	<option value="Master of Business Administration">Master of Business Administration</option>
	<!-- <option value="HR">HR</option>
	<option value="Finance">Finance</option>
	<option value="Marketing">Marketing</option> -->
	<?php
}
else if($program == "UG - Bachelor of Engineering")
{
	?>
	<option value="">Select Course</option>
	<option value="Artificial Intelligence and Machine Learning">Artificial Intelligence and Machine Learning</option>
	<option value="Civil Engineering">Civil Engineering</option>
	<option value="Computer Science & Engineering">Computer Science & Engineering</option>
	<option value="Computer Science Engineering (Data Science)">Computer Science Engineering (Data Science)</option>
	<option value="Electronics & Communications Engineering">Electronics & Communications Engineering</option>
	<?php
}
else
{
	?>
	<option value="">Select Course</option>
	<?php
}

?>