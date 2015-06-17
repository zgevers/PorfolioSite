<!DOCTYPE html>
<html>
	<head>
		<title>Trivia</title>
	</head>
	<body>

		<?php

			// If the submit button is pressed
			if(isset($_POST['submit']))
			{
				$score = 0;
				$numcorrect = 0;

				if($_POST['answer1'] == 'shadow')
				{
					echo ' Riddle 1 is correct ';
					$numcorrect = $numcorrect  + 1;
				}	else {
					echo ' Riddle 1 is incorrect ';
				}

				if($_POST['answer2'] == 'towel' || $_POST['answer2'] == 'a towel')
				{
					echo ' Riddle 2 is correct ';
					$numcorrect = $numcorrect  + 1;
				}	else {
					echo ' Riddle 2 is incorrect ';
				}

				if($_POST['answer3'] == 'map' || $_POST['answer3'] =='a map')
				{
					echo ' Riddle 3 is correct ';
					$numcorrect = $numcorrect  + 1;
				}	else {
					echo ' Riddle 3 is incorrect ';
				}

				if($_POST['answer4'] == 'the letter e' || $_POST['answer4'] == 'letter e' || $_POST['answer4'] == 'e')
				{
					echo ' Riddle 4 is correct ';
					$numcorrect = $numcorrect  + 1;
				}	else {
					echo ' Riddle 4 is incorrect ';
				}


                //Create an error array
                $error = array();

                //Check for a message
                if(empty($_POST['answer1']))
                {
                	$error['answer1'] = ' You must answer the first question ';
                }

                if(empty($_POST['answer2']))
                {
                	$error['answer2'] = ' You must answer the second question ';
                }

                if(empty($_POST['answer3']))
                {
                	$error['answer3'] = ' You must answer the third question ';
                }

                if(empty($_POST['answer4']))
                {
                	$error['answer4'] = ' You must answer the fourth question ';
                }

                //If no errors, send otherwise don't
                if(sizeof($error) == 0)
              	{
					
              		$score = $numcorrect / 4;
              		$score = $score * 100;
              		echo 'Your score is: ' . $score . '%';

				} else {

					//Checks the array for errors
					foreach($error as $value)
					{
						echo $value . "<br />";
					}

				}
			}
		?>

		<form method="post" action="trivia.php">

			<label>I'm your follower in the light, Yet I'm invisible in the night. At various sizes I appear; I won't harm you, have no fear. What am I?</label><br />
			<input name="answer1" type="text" value="" /><br /><br />

			<label>What gets wetter and wetter the more it dries?</label><br />
			<input name="answer2" type="text" value="" /><br /><br />

			<label>I have Towns But No Houses. Lakes, But No Water. Forests But No Trees. And Mountains But No Rocks. What Am I?</label><br />
			<input name="answer3" type="text" value="" /><br /><br />

			<label>The beginning of eternity, the end of time and space, the begining of every end, and the end of every place.</label><br />
			<input name="answer4" type="text" value="" /><br /><br />


			<input name="submit" type="submit" value="Submit" />

		</form>

	</body>
</html>