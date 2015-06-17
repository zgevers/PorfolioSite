<!DOCTYPE html>
<html>
	<head>
		<title>Ajax Test</title>
		<script src="http://code.jquery.com/jquery.js"></script>

		<script type="text/javascript">

			//when page is loaded
			$(document).ready(function()
			{
				$('#greetingform').submit(function(e)
				{
					//hold up
					e.preventDefault();

					//call function
					greetingPost();
				});
			});

			function greetingPost()
			{
				//ajax call
				$.ajax({
					type: "POST",
					url: "greeting.php",
					data: $('#greetingform').serialize(),
					dataType: "json",
					success: greetingResponse
				});
			}

			function greetingResponse(json)
			{
				$('#greetingresponse').html("Hello " + json.firstname);
			}

		</script>

	</head>
	<body>

		<div id="greetingresponse"></div>

		<form id="greetingform">
			<label>What is your name?</label><br />
			<input name="firstname"	 type="text" />
			<input name="submit" type="submit" value="Go" />
		</form>

	</body>
</html>