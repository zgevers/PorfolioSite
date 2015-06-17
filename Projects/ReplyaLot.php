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
					<a class="navbar-brand" href="http://zgevers.com/"><span class="glyphicon glyphicon-home"></a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav">
						<li><a href="#">Talk</a></li>
						<li class="active"><a href="#">Reply</a></li>
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

				// Get talk information
				$query = "SELECT talk FROM talks WHERE talk_id = '{$_GET['talk']}' LIMIT 1";
				$result = mysqli_query($dbc, $query);
				$row = mysqli_fetch_assoc($result);
		
				// Back to talks
				echo "<p><a href=\"TalkaLot.php\">Back to talks</a></p>";
		
				// Display talk
				echo "<h2>{$row['talk']}</h2>";

				// Check for reply removal
				if($_GET['action'] == 'remove')
				{
					// Delete talk
					$query = "DELETE FROM replies WHERE reply_id = '{$_GET['id']}' LIMIT 1";
					$result = @mysqli_query($dbc, $query) or die('Query failed: ' . mysqli_error($dbc));
  
					// Display confirmation
					echo "<div class=\"alert alert-success\">Your reply has been removed</div>";
				}

		
				// If the submit button is pressed
				if(isset($_POST['submit']))
				{
					$error =array();
				
					// Check for reply
					if(empty($_POST['reply']))
					{
					$error[] = '<span class="glyphicon glyphicon-warning-sign"></span> A reply is required';
					}

					// If no errors, add reply
					// Otherwise display errors
					if(sizeof($error) == 0)
					{
						// Clean stuff up
						$reply = mysqli_real_escape_string($dbc, $_POST['reply']);

						// Insert reply
						$query = "INSERT INTO replies (
							reply_id,
							talk_id,
							reply,
							submitdate
							) VALUES (
							null,
							'{$_GET['talk']}',
							'$reply',
							NOW()
							)";
						$result = mysqli_query($dbc, $query) or die(mysql_error($dbc));

						// Display confirmation
						echo '<span class="glyphicon glyphicon-floppy-saved"></span> Your reply has been saved';

					} else {
						foreach($error as $value)
						{
							echo $value . "<br />";
						}
					}
				}

			?>

			<form method="post" action="ReplyaLot.php?talk=<?php echo $_GET['talk']; ?>">
				<textarea name="reply" placeholder="Type in your reply" rows="5" class="form-control"></textarea><br />
				<input name="submit" type="submit" value="Save" class="btn btn-primary"/>
			</form>

		</div>

		<div class="container" style="margin-left: 25px; margin-top: 10px">


			<?php
		
				// Select replies from the database
				$query = "SELECT 
					reply_id,
					reply, 
					DATE_FORMAT(submitdate, '%M %d, %Y') AS formatted_date 
				FROM 
					replies 
				WHERE 
					talk_id = '{$_GET['talk']}' 
				ORDER BY 
					submitdate DESC";
				$result = mysqli_query($dbc, $query);
				while($row = mysqli_fetch_assoc($result))
				{
					echo "<div class=\"well\">{$row['formatted_date']}: {$row['reply']}<a href=\"ReplyaLot.php?action=remove&id={$row['reply_id']}\" class=\"pull-right\"><span class=\"glyphicon glyphicon-remove\"></span></a></div>";
				}
		
			?>

		</div>


	</body>
</html>