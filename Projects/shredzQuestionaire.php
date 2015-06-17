<!DOCTYPE html>
<html>
	<head>
		<title>Shredz Questionaire</title>

		<title>Which is right for you?</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script src="http://code.jquery.com/jquery.js"></script>
		<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
		<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	</head>
	<body>

		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="http://www.shredz.com/">SHREDZ</a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav">
						<li class="active"><a href="shredzQuestionaire.php">Questionaire</a></li>
						<li><a href="shredzSites.php">Shredz Site Links</a></li>
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
				$db_name = 'zgeversc_products';

				//Connect to the database
				$dbc = mysqli_connect (
					$db_host,
					$db_user,
					$db_password,
					$db_name
				) or die (mysqli_connect_error());


				//if statements: what is the best product?
				//if such answer and such answer and such answer, attribute key value(s) 
				//search database for corresponding product and return
				if(isset($_POST['submit']))
				{
					//Question1 
					$gender = $_POST['gen'];
					if($gender == "Male")
					{
						//Possible products: male
						//echo 'Male selected';
						$query = "SELECT Name, keyValue FROM products WHERE keyValue = 'I' OR keyValue = 'K' OR keyValue = 'L' OR keyValue = 'M' OR keyValue = 'N' ORDER BY product_id DESC";
						$result = mysqli_query($dbc, $query);
						while ($row = mysqli_fetch_assoc($result)) 
						{
							// Display shout
							//echo $row['Name'] . "<br />";

							$genderArray[] = $row['keyValue'];
						}

					} else if($gender == "Female")
					{
						//Possible products: female
						//echo 'Female selected';
						$query = "SELECT Name, keyValue FROM products WHERE keyValue = 'J' OR keyValue = 'K' OR keyValue = 'M' OR keyValue = 'N' ORDER BY product_id DESC";
						$result = mysqli_query($dbc, $query);
						while ($row = mysqli_fetch_assoc($result)) 
						{
							// Display shout
							//echo $row['Name'] . "<br />";

							$genderArray[] = $row['keyValue'];
						}
					}



					foreach ($_POST[purp] as $v) {
						if($v == "fatLoss")
							{
								$query = "SELECT Name, keyValue FROM products WHERE keyValue = 'I' OR keyValue = 'J' OR keyValue = 'M' ORDER BY product_id DESC";
								$result = mysqli_query($dbc, $query);
								while ($row = mysqli_fetch_assoc($result)) 
								{
									//echo $row['Name'] . "<br />";

									$purposeArray[] = $row['keyValue'];
								}
							} 
						if($v == "muscleBuilding")
							{
								$query = "SELECT Name, keyValue FROM products WHERE keyValue = 'I' OR keyValue = 'J' OR keyValue = 'K' OR keyValue = 'L' OR keyValue = 'N' ORDER BY product_id DESC";
								$result = mysqli_query($dbc, $query);
								while ($row = mysqli_fetch_assoc($result)) 
								{
									//echo $row['Name'] . "<br />";

									$purposeArray[] = $row['keyValue'];
								}
							} 
						if($v == "healthWellness")
							{
								$query = "SELECT Name, keyValue FROM products WHERE keyValue = 'K' OR keyValue = 'L' OR keyValue = 'M' ORDER BY product_id DESC";
								$result = mysqli_query($dbc, $query);
								while ($row = mysqli_fetch_assoc($result)) 
								{
									//echo $row['Name'] . "<br />";

									$purposeArray[] = $row['keyValue'];
								}
							} 
					}


					//Question3
					$ageRng = $_POST[age];
					if($ageRng == "18-30")
					{
						$query = "SELECT Name, keyValue FROM products WHERE keyValue = 'I' OR keyValue = 'J' OR keyValue = 'K' OR keyValue = 'L' OR keyValue = 'M' OR keyValue = 'N' ORDER BY product_id DESC";
						$result = mysqli_query($dbc, $query);
						while ($row = mysqli_fetch_assoc($result)) 
						{
							//echo $row['Name'] . "<br />";

							$ageArray[] = $row['keyValue'];
						}

					} else if($ageRng == "31-50")
					{
						$query = "SELECT Name, keyValue FROM products WHERE keyValue = 'I' OR keyValue = 'J' OR keyValue = 'K' OR keyValue = 'L' OR keyValue = 'M' OR keyValue = 'N' ORDER BY product_id DESC";
						$result = mysqli_query($dbc, $query);
						while ($row = mysqli_fetch_assoc($result)) 
						{
							//echo $row['Name'] . "<br />";

							$ageArray[] = $row['keyValue'];
						}
					}
					else if($ageRng == "51+")
					{
						$query = "SELECT Name, keyValue FROM products WHERE keyValue = 'K' OR keyValue = 'L' OR keyValue = 'M' ORDER BY product_id DESC";
						$result = mysqli_query($dbc, $query);
						while ($row = mysqli_fetch_assoc($result)) 
						{
							//echo $row['Name'] . "<br />";

							$ageArray[] = $row['keyValue'];
						}
					}

					echo "<br /><br />";
					$result1 = array_intersect($genderArray, $purposeArray, $ageArray);
					//print_r($result1);

					foreach($result1 as $k)
					{
						$filter = $filter . "keyValue = '" . $k . "' OR ";
						$combo = $combo . $k;
					}
					// Gets rid of the last 4 characters in the filter variable
					$filter = substr($filter,0,-4);
					//$combo = substr($filter,0,-4);

					$query = "SELECT Name, keyValue FROM products WHERE $filter ORDER BY product_id DESC";
						$result = mysqli_query($dbc, $query);
						while ($row = mysqli_fetch_assoc($result)) 
						{
							echo $row['Name'] . "<br />";
						}

					$query = "SELECT Name, keyValue FROM products WHERE PCombo = '$combo' ORDER BY product_id DESC";
						$result = mysqli_query($dbc, $query);
						while ($row = mysqli_fetch_assoc($result)) 
						{
							echo $row['Name'] . "<br />";
						}


				}
	           
			?>
		
			<h3>Which Shredz Product is best for you?</h3>
			<p>Answer the questions below to get the Shredz product that best fits your needs.</p>
			<form method="post" action="shredzQuestionaire.php">

				<ul>

					<li><label>Male or Female?</label><br /><br />
						<ul>
							<li><label for="">Male 	</label><input name="gen" type="radio" value="Male" /><br /><br /></li>
							<li><label for="">Female </label><input name="gen" type="radio" value="Female" /><br /><br /></li>
						</ul>
					</li>

					<li><label>What are you trying to do?</label><br /><br />
						<ul>
							<li><label for="">Lose Fat </label><input name="purp[]" type="checkbox" value="fatLoss" /><br /><br /></li>
							<li><label for="">Build Muscle </label><input name="purp[]" type="checkbox" value="muscleBuilding" /><br /><br /></li>
							<li><label for="">Be Healthy and Well </label><input name="purp[]" type="checkbox" value="healthWellness" /><br /><br /></li>
						</ul>
					</li>

					<li><label>What is your age group?</label><br /><br />
						<ul>
							<li><label for="">18-30 </label><input name="age" type="radio" value="18-30" /><br /><br /></li>
							<li><label for="">31-50 </label><input name="age" type="radio" value="31-50" /><br /><br /></li>
							<li><label for="">51+ </label><input name="age" type="radio" value="51+" /><br /><br /></li>
						</ul>
					</li>
				</ul>


				<input name="submit" type="submit" value="Submit" />

			</form>
		</div>

	</body>
</html>