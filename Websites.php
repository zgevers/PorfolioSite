<!DOCTYPE html>
<html>
	<head>
		<title>Portfolio</title>

		<title>Zachary Gevers</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script src="http://code.jquery.com/jquery.js"></script>
		<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
		<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>

	<style type="text/css">
			.table tbody>tr>td {
				padding: 25px;
			}
		
	  h3 {
        color: #FFF;
        margin-top: 10px;
        margin-bottom: 10px;
      }

      p {
		color: #FFF;
        margin-top: 10px;
        margin-bottom: 10px;
        padding-bottom: 10px;
		}
			
      h2 {
        font-size: 26px;
        margin-top: 10px;
      }

      .carousel-inner {
    			text-align: center;
    	}

    	img {
    			margin: 0 auto;
    	}

    	.carousel-inner>.item>img {
    			max-width: 75%;
    			max-height: 75%;
    	}

    	.carousel-caption {
    			color: #FFF;
    			background: rgba(0,0,0,.8);
          		padding-top: 0px;
        		padding-bottom: 20px;
    	}

      body {
          background: #272727;
      }

      h1, h2 {
        color: #E6E6E6;
      }

      p {
        font-size: 16px;
      }

      .well {
        background-color: #333;
        border: 1px solid #E6E6E6;
        padding: 10px;
        margin: 10px;
      }
	</style>

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
					<a class="navbar-brand" href="http://zgevers.com/index.php">Zachary Gevers</a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav">
						<li><a href="http://zgevers.com/Portfolio.php">About</a></li>
						<li><a href="http://zgevers.com/3Dmodan.php">3D Modeling/Animation</a></li>
						<li class="active"><a href="http://zgevers.com/Websites.php">Websites</a></li>
						<li><a href="http://zgevers.com/Sketches.php">Sketches</a></li>
					</ul>
				</div>
			</div>
		</div>
		
		<!-- content -->
		<div class="container" style="margin-top: 50px">

			<h1>Websites</h1>

			<div id="carousel-example-generic" class="carousel slide">
  					<!-- Indicators -->
  					<ol class="carousel-indicators">
    					<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    					<li data-target="#carousel-example-generic" data-slide-to="1"></li>
    					<li data-target="#carousel-example-generic" data-slide-to="2"></li>
  					</ol>

 					<!-- Wrapper for slides -->
  					<div class="carousel-inner">
  						<div class="item active">
      						<img src="images/MyShredzWebsite.png"  style="center" alt="...">
      							<div class="carousel-caption">
      								<h3>Client Landing Website</h3>
   									<p>Landing site for a client during my web design internship with YP Group. I was given more or less free reign on most of the design aspects of this site. <a href="http://loseweightpillsformen.com/">Website Link</a></p>
     							</div>
     					</div>

     					<div class="item">
      						<img src="images/ShredzWebsite.png"  style="center" alt="...">
      							<div class="carousel-caption">
      								<h3>Client Information Website</h3>
   									<p>Product information site for a client during my web design internship with YP Group. I provided touch ups and alterations to most of the css of this site. <a href="http://fatburnerpillsformen.com/">Website Link</a></p>
     							</div>
    					</div>

    					<div class="item">
      						<img src="images/YP Group Refferal.jpeg"  style="center" alt="...">
      							<div class="carousel-caption">
      								<h3>YP Group Referral</h3>
   									<p>Design referral from my YP Group Internship.</p>
     							</div>
    					</div>

  					</div>

  					<!-- Controls -->
 					<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
    					<span class="icon-prev"></span>
  					</a>
 					<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
   						<span class="icon-next"></span>
 					</a>
			</div>

			<!--<div class="container" style="margin-left: 0px; margin-top: 10px">

				<table class="table table-hover">
					<thead>
						<tr>
							<th>Site Name</th>
							<th>Description</th>
							<th>Link</th>
						</tr>
					</thead>
					<tbody>
						 
						 <tr>
						 	<td>Shredz For Him</td>
						 	<td>One of several Shredz sites I worked on while employed by YP Group. Shredz is YP Group's primary client
						 		so many of the sites I helped make pertained to them. My work on each site was more or less the same: 
						 		with the template already made by my boss, the Lead Designer and CEO of YP Group, I was tasked with updating
						 		content, images, and videos as well as color changes to the site respective to the product it was selling.
						 		This was one of a set of sites sharing the same template and so my same contributions.</td>
						 	<td><a href="http://fatburnerpillsformen.com/">Link</a></td>
						 </tr>

						 <tr>
						 	<td>Shredz For Her</td>
						 	<td>One of several Shredz sites I worked on while employed by YP Group. Shredz is YP Group's primary client
						 		so many of the sites I helped make pertained to them. My work on each site was more or less the same: 
						 		with the template already made by my boss, the Lead Designer and CEO of YP Group, I was tasked with updating
						 		content, images, and videos as well as color changes to the site respective to the product it was selling.
						 		This was one of a set of sites sharing the same template and so my same contributions.</td>
						 	<td><a href="http://quickweightlosspillsforwomen.com/index.php">Link</a></td>
						 </tr>
						 
						 <tr>
						 	<td>Lose Weight Pills For Women</td>
						 	<td>Similar to the previous sites, these were also for SHREDZ products. However these were landing pages using
						 		the Nostalgia template. Unlike the previous set of websites, this set of websites using Nostalgia were of 
						 		primarily my own creation (aside, of course, from the template). With supervison from my boss, I chose the
						 		coloring, added the social media buttons and links, the carousel, the table of products at the end, the 
						 		youtube vids, among other aspects of the site up to my own creative mind to determine. I repeated this 
						 		with the other sites which share the same template.</td>
						 	<td><a href="http://loseweightpillsforwomen.com/">Link</a></td>
						 </tr>
						 <tr>
						 	<td>Lose Weight Pills For Men</td>
						 	<td>Similar to the previous sites, these were also for SHREDZ products. However these were landing pages using
						 		the Nostalgia template. Unlike the previous set of websites, this set of websites using Nostalgia were of 
						 		primarily my own creation (aside, of course, from the template). With supervison from my boss, I chose the
						 		coloring, added the social media buttons and links, the carousel, the table of products at the end, the 
						 		youtube vids, among other aspects of the site up to my own creative mind to determine. I repeated this 
						 		with the other sites which share the same template.</td>
						 	<td><a href="http://loseweightpillsformen.com/">Link</a></td>
						 </tr>
						 
					</tbody>

				</table>
			</div>-->

		</div>

	</body>
</html>