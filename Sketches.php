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
		<script type='text/javascript' src="http://imsky.github.io/holder/holder.js"></script>

		<style type="text/css">
			h3 {
				color: #FFF;
        margin-top: 10px;
        margin-bottom: 10px;
			}

      h2 {
        font-size: 26px;
        margin-top: 10px;
      }

      p {
        color: #FFF;
        margin-top: 10px;
        margin-bottom: 10px;
        padding-bottom: 10px;
      }

			.carousel-inner {
    			text-align: center;
    	}
    	.carousel-inner > .item > img {
    			margin: 0 auto;
          max-width: 75%;
          max-height: 50%;
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
						<li><a href="http://zgevers.com/Websites.php">Websites</a></li>
						<li class="active"><a href="http://zgevers.com/Sketches.php">Sketches</a></li>
					</ul>
				</div>
			</div>
		</div>
		
		<!-- content -->
		<div class="container" style="margin-top: 50px">

			<h1>Sketches</h1>

			<div class="well" style="margin-top: 0px">
					<h2>This page contains composites I've done in photoshop.</h2>
			</div>

				<div id="carousel-example-generic" class="carousel slide">
  					<!-- Indicators -->
  					<ol class="carousel-indicators">
    					<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    					<li data-target="#carousel-example-generic" data-slide-to="1"></li>
   						<!--<li data-target="#carousel-example-generic" data-slide-to="2"></li>
              <li data-target="#carousel-example-generic" data-slide-to="3"></li> -->
  					</ol>

 					<!-- Wrapper for slides -->
  					<div class="carousel-inner">

              <div class="item active">
                <img src="images/Freestyle.jpg"  style="center" alt="...">
                  <div class="carousel-caption">
                      <h3>Gateway</h3>
                    <p>A composite of several pictures I took.</p>
                  </div>
              </div>

              <div class="item">
                <img src="images/AmuletLiteral.png"  style="center" alt="...">
                  <div class="carousel-caption">
                      <h3>Insignia</h3>
                    <p>A photoshop sketch showing "unity" among celestial objects.</p>
                  </div>
              </div>

   						<!--<div class="item">
      					<img src="images/Scan2.png"  style="center" alt="...">
      						<div class="carousel-caption">
      								<h3>Overseer</h3>
   									<p>A character design idea I have. One of several in fact, but this is the only one currently drawn.</p>
     							</div>
    					</div>

    					<div class="item">
      					<img src="images/Scan1.png"  style="center" alt="...">
      						<div class="carousel-caption">
      								<h3>Monolith</h3>
   									<p>This is the basis for my Senior Thesis Project. I turned this rough sketch into an atmospheric environmental 3D animation, which can be found on the 3D Modeling page.</p>
     							</div>
    					</div> -->

  					</div>

  					<!-- Controls -->
 					 <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
    					<span class="icon-prev"></span>
  					 </a>
 					 <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
   					 	<span class="icon-next"></span>
 					 </a>
				</div>


		</div>

	</body>
</html>