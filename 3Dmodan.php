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
						<li class="active"><a href="http://zgevers.com/3Dmodan.php">3D Modeling/Animation</a></li>
						<li><a href="http://zgevers.com/Websites.php">Websites</a></li>
						<li><a href="http://zgevers.com/Sketches.php">Sketches</a></li>
					</ul>
				</div>
			</div>
		</div>
		
		<!-- content -->
		<div class="container" style="margin-top: 50px">

			<h1>3D Modeling/Animation</h1>

			<div class="well" style="margin-top: 0px">
					<h2>This page contains Renders of Models and Animations I've created. The carousel features Models I've made,  
						the set of videos beneath it feature various animations I've made.</h2>
			</div>
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
      						<img src="images/Prototype18.jpg"  style="center" alt="...">
      							<div class="carousel-caption">
      								<h3>Senior Thesis Render</h3>
   									<p>A render of my Senior Thesis Project (A video of it can be found below).</p>
     							</div>
     					</div>

     					<div class="item">
      						<img src="images/FINAL4.jpg"  style="center" alt="...">
      							<div class="carousel-caption">
      								<h3>Independent Study Render</h3>
   									<p>A render of my Independant study project where I self taught myself more advanced modeling techniques.</p>
     							</div>
    					</div>

              <!--<div class="item">
                  <img src="images/GrassWithTreesAndLighting(Fur1).jpg"  style="center" alt="...">
                    <div class="carousel-caption">
                      <h3>Nature</h3>
                    <p>A natural scene created during my experiments in paint efects, fur, and lighting.</p>
                  </div>
              </div>-->

              <div class="item">
                  <img src="images/TempleDoor.jpg"  style="center" alt="...">
                    <div class="carousel-caption">
                      <h3>Temple Door</h3>
                    <p>A door created for a game I worked on.</p>
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

				<br />

				<!--Thesis-->
				<center><iframe width="800" height="600" src="//www.youtube.com/embed/sFuZVP25pic" frameborder="0" allowfullscreen></iframe></center>
				<!--Final Animate-->
				<center><iframe width="800" height="600" src="//www.youtube.com/embed/mgZrWM_hd08" frameborder="0" allowfullscreen></iframe></center>
				<!--Mantis-->
				<center><iframe width="800" height="600" src="//www.youtube.com/embed/RafrF0_UnLQ" frameborder="0" allowfullscreen></iframe></center>
				<!--Bounce-->
				<center><iframe width="800" height="600" src="//www.youtube.com/embed/GUQjal-rY38" frameborder="0" allowfullscreen></iframe></center>


		</div>

	</body>
</html>