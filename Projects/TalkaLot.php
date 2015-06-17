<!DOCTYPE html>
<html>
	<head>
		<title>TalkaLot</title>

		<title>Bootstrap Template</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script src="http://code.jquery.com/jquery.js"></script>
		<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
		<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>

	</head>
	<body>

		<!-- fixed header bar -->
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="http://zgevers.com/"><span class="glyphicon glyphicon-home"></span></a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav">
						<li class="active"><a href="#">Talk</a></li>
						<li><a href="#">Reply</a></li>
					</ul>
				</div>
			</div>
		</div>


		<div class="container" style="margin-top: 75px">

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

				// Check for talk removal
				if($_GET['action'] == 'remove')
				{
					// Delete talk
					$query = "DELETE FROM talks WHERE talk_id = '{$_GET['id']}' LIMIT 1";
					$result = @mysqli_query($dbc, $query) or die('Query failed: ' . mysqli_error($dbc));
  					
  					// Delete associated replies
					$query = "DELETE FROM replies WHERE talk_id = '{$_GET['id']}'";
					$result = @mysqli_query($dbc, $query) or die('Query failed: ' . mysqli_error($dbc));

					// Display confirmation
					echo "<div class=\"alert alert-success\">Your talk has been removed</div>";
				}

				// If the submit button is pressed
				if(isset($_POST['submit']))
				{
					$error =array();
				
					// Check for talk
					if(empty($_POST['talk']))
					{
					$error[] = '<span class="glyphicon glyphicon-warning-sign"></span> A talk is required';
					}

					// If no errors, add talk
					// Otherwise display errors
					if(sizeof($error) == 0)
					{
						// Clean stuff up
						$talk = mysqli_real_escape_string($dbc, $_POST['talk']);

						// Insert talk
						$query = "INSERT INTO talks (
							talk_id,
							talk,
							submitdate
							) VALUES (
							null,
							'$talk',
							NOW()
							)";
						$result = mysqli_query($dbc, $query) or die(mysql_error($dbc));

						// Display confirmation
						echo '<span class="glyphicon glyphicon-floppy-saved"></span> Your talk has been saved';


					} else {
						foreach($error as $value)
						{
							echo $value . "<br />";
						}
					}
				}

			?>

			<h2>TalkaLot forum</h2>

			<form method="post" action="TalkaLot.php">
				<textarea name="talk" placeholder="What do you have to say?" rows="5" class="form-control"></textarea><br />
				<input name="submit" type="submit" value="Save" class="btn btn-primary"/>
			</form>

		</div>

		<div class="container" style="margin-left: 25px; margin-top: 10px">

			<!-- Talks table -->
			<table class="table">
				<thead>
					<tr>
						<th>Talks</th>
						<th>Date</th>
						<th>Replies</th>
					</tr>
				</thead>
				<tbody>

					<?php

					// Get our talks
					$query = "SELECT
							talk_id,
							talk,
							DATE_FORMAT(submitdate,'%M %d, %Y') AS formatted_date
						FROM 
							talks
						ORDER BY 
							submitdate DESC";
					$result = mysqli_query($dbc, $query);
					while($row = mysqli_fetch_assoc($result))
					{
						// Select the number of replies from the database
						$query2 = "SELECT * FROM replies WHERE talk_id = '{$row['talk_id']}'";
						$result2 = mysqli_query($dbc, $query2);
						$replies = mysqli_num_rows($result2);
			  
						// Print out talks and number of replies
						echo "<tr>";
						echo "<td><a href=\"ReplyaLot.php?talk={$row['talk_id']}\">{$row['talk']}</a></td>";
						echo "<td>{$row['formatted_date']}</td>";
						echo "<td>{$replies}</td>"; 
						echo "<td><a href=\"TalkaLot.php?action=remove&id={$row['talk_id']}\" class=\"pull-right\"><span class=\"glyphicon glyphicon-remove\"></span></a></td>";
						echo "</tr>"; 
					}

					?>

				</tbody>
			</table>
		</div>

	</body>
</html>