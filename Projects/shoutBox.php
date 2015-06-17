<!DOCTYPE html>
<html>
	<head>
		<title>Shoutbox</title>
	</head>
	<body>

		<?php

			//Set up database info
			$db_user = 'zgeversc_zach';
			$db_password = 'dragon-lord@8';
			$db_host = 'localhost';
			$db_name = 'zgeversc_dynamicPlatform';

			//Connect to the database
			$dbc = mysqli_connect (
				$db_host,
				$db_user,
				$db_password,
				$db_name
			) or die (mysqli_connect_error());

			// If the submit button is pressed
			if(isset($_POST['submit']))
			{
				$error =array();

				// Check for shout
				if(empty($_POST['shout']))
				{
					$error[] = 'A shout is required';
				}

				// If no errors, add shout
				// Otherwise display errors
				if(sizeof($error) == 0)
				{
					// Clean stuff up
					$shout = mysqli_real_escape_string($dbc, $_POST['shout']);

					// Insert Shout
					$query = "INSERT INTO shouts (
							shout_id,
							shout,
							shout_date
						) VALUES (
							null,
							'$shout',
							NOW()
						)";
					$result = mysqli_query($dbc, $query) or die(mysql_error($dbc));

					// Display confirmation
					echo 'Your shout has been saved';

				} else {
					foreach($error as $value)
					{
						echo $value . "<br />";
					}
				}
			}

		?>

		<form method="post" action="shoutBox.php">
			<label>What do you want to say</label><br />
			<textarea name="shout" rows="5" cols="30"></textarea><br />
			<input name="submit" type="submit" value="Save" />
		</form>

		<?php

			// Get our shouts
			$query = "SELECT
						shout_id,
						shout,
						DATE_FORMAT(shout_date,'%M %d, %Y') AS formatted_date
					FROM 
						shouts
					ORDER BY 
						shout_date DESC";
			$result = mysqli_query($dbc, $query);
			while($row = mysqli_fetch_assoc($result))
			{
				echo $row['formatted_date'] . "<br />";
				echo $row['shout'];
				echo "<hr />";
			}
		?>



	</body>
</html>