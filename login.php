<!DOCTYPE html>
<html lang="en">
<head>
	<title>Ideation</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" >
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">

	<link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">	

	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/jquery.js"></script>
	</head>



<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
        		<span class="icon-bar"></span>
        		<span class="icon-bar"></span> 
      		</button>
      		<a class="navbar-brand" href="#myPage">Logo</a>
      	</div>
      	<div class="collapse navbar-collapse" id="myNavbar">

        <ul class="nav navbar-nav navbar-left">

        <li><a href="#feature">FEATURED</a></li>
        <li><a href="#popular">POPULAR</a></li>
        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" 
        	aria-expanded="false" >MORE <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">SOCIAL</a></li>
            <li><a href="#">RANDOM</a></li>
            <li><a href="#">NEWS</a></li> 
          </ul>
        </li>
        <li><a href="#portfolio">PORTFOLIO</a></li>
        <li><a href="#contact">CONTACT</a></li>
    	</ul>
        <ul class="nav navbar-nav navbar-right">
        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" 
        	aria-expanded="false" >PROFILE</a>
          <ul class="dropdown-menu">
            <li><a href="#">ACCOUNT</a></li>
            <li><a href="#">SETTINGS</a></li>
            <li><a href="#">LOGOUT</a></li> 
          </ul>
        </li>
        <li><a href="index.html"> LOGOUT</a></li>

      </ul>
    </div>
  </div>
</nav>

<!-- <div id="search" class="collapse">
	<input type="text"><a href="#"><span class="glyphicon glyphicon-search"></span></a>
</div>
 -->

<div class="jumbotron text-center">
	<h1>Ideation </h1>
	<p>WHERE IDEAS GENERATE</p>
	<form class="form-inline">
		<input type="text" class="form-control" size="50" placeholder="Search By Keyword..">
		<button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-search"></span> SEARCH</button>
	</form>
	<br>
	<p>SEARCH TOPICS</p>
    <button type="button" class="btn btn-primary">Movies</button>
    <button type="button" class="btn btn-info">Science</button>
    <button type="button" class="btn btn-success">General</button>
    <button type="button" class="btn btn-warning">Sports</button>
    <button type="button" class="btn btn-primary">Education</button>
    <button type="button" class="btn btn-info">Food</button>
    <button type="button" class="btn btn-success">Love</button>
    <button type="button" class="btn btn-warning">Money</button>
    <button type="button" class="btn btn-primary">Fitness</button>
    <button type="button" class="btn btn-info">Weather</button>
    <button type="button" class="btn btn-success">Technology</button>
    <button type="button" class="btn btn-warning">Company</button>
</div>

<!-- Container Section -->

<div id="feature" class="container-fluid text-center">

<!-- 	<div class="row slideanim">
		<div class="col-sm-8">
 --><h2>Featured </h2>
 <div class="row slideanim">
		<div class="col-sm-4">
			<span class="glyphicon glyphicon-leaf logo-small"></span>
			<h4>SCIENCE</h4>
			<p>Lorem ipsum dolor sit amet.. </p>
		</div>
		<div class="col-sm-4">
			<span class="glyphicon glyphicon-heart logo-small"></span>
			<h4>TECHNOLOGY</h4>
			<p>Lorem ipsum dolor sit amet.. </p>
		</div>
		<div class="col-sm-4">
			<span class="glyphicon glyphicon-briefcase logo-small"></span>
			<h4>ENTREPRENEURSHIP</h4>
			<p>Lorem ipsum dolor sit amet.. </p>
		</div>
	</div>
</div>

<div id="popular" class="container-fluid text-center bg-grey">
	<h2>Popular</h2>
	<div class="row slideanim">
		<div class="col-sm-3">
			<span class="glyphicon glyphicon-music logo-small"></span>
			<h4>MUSIC</h4>
			<p>Lorem ipsum dolor sit amet.. </p>
		</div>
		<div class="col-sm-3">
			<span class="glyphicon glyphicon-certificate logo-small"></span>
			<h4>SPORTS</h4>
			<p>Lorem ipsum dolor sit amet.. </p>
		</div>
		<div class="col-sm-3">
			<span class="glyphicon glyphicon-cutlery logo-small"></span>
			<h4>FOOD</h4>
			<p>Lorem ipsum dolor sit amet.. </p>
		</div>
		<div class="col-sm-3">
			<span class="glyphicon glyphicon-film logo-small"></span>
			<h4>MOVIES</h4>
			<p>Lorem ipsum dolor sit amet.. </p>
		</div>
	</div>
	<br><br>
		<div class="row slideanim">
		<div class="col-sm-3">
			<span class="glyphicon glyphicon-cd logo-small"></span>
			<h4>GAMES</h4>
			<p>Lorem ipsum dolor sit amet.. </p>
		</div>
		<div class="col-sm-3">
			<span class="glyphicon glyphicon-education logo-small"></span>
			<h4>EDUCATION</h4>
			<p>Lorem ipsum dolor sit amet.. </p>
		</div>
		<div class="col-sm-3">
			<span class="glyphicon glyphicon-phone logo-small"></span>
			<h4>GADGETS</h4>
			<p>Lorem ipsum dolor sit amet.. </p>
		</div>
		<div class="col-sm-3">
			<span class="glyphicon glyphicon-ice-lolly logo-small"></span>
			<h4>FITNESS</h4>
			<p>Lorem ipsum dolor sit amet.. </p>
		</div>
	</div>
</div>


<div id="services" class="container-fluid text-center">
	<h2>SERVICES</h2>
	<h4>Waht we offer</h4>
	<br>
	<div class="row slideanim">
		<div class="col-sm-4">
			<span class="glyphicon glyphicon-off logo-small"></span>
			<h4>POWER</h4>
			<p>Lorem ipsum dolor sit amet.. </p>
		</div>
		<div class="col-sm-4">
			<span class="glyphicon glyphicon-heart logo-small"></span>
			<h4>LOVE</h4>
			<p>Lorem ipsum dolor sit amet.. </p>
		</div>
		<div class="col-sm-4">
			<span class="glyphicon glyphicon-lock logo-small"></span>
			<h4>JOB DONE</h4>
			<p>Lorem ipsum dolor sit amet.. </p>
		</div>
	</div>
	<br><br>
	<div class="row slideanim">
		<div class="col-sm-4">
			<span class="glyphicon glyphicon-leaf logo-small"></span>
			<h4>GREEN</h4>
			<p>Lorem ipsum dolor sit amet.. </p>
		</div>
		<div class="col-sm-4">
			<span class="glyphicon glyphicon-certificate logo-small"></span>
			<h4>CERTIFIED</h4>
			<p>Lorem ipsum dolor sit amet.. </p>
		</div>
		<div class="col-sm-4">
			<span class="glyphicon glyphicon-wrench logo-small"></span>
			<h4>HARD WORK</h4>
			<p>Lorem ipsum dolor sit amet.. </p>
		</div>
	</div>
</div>


<div id="portfolio" class="container-fluid text-center bg-grey">
  <h2>What People say</h2>
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4>"This company is the best. I am so happy with the result!"<br><span style="font-style:normal;">Michael Roe, Vice President, Comment Box</span></h4>
      </div>
      <div class="item">
        <h4>"One word... WOW!!"<br><span style="font-style:normal;">John Doe, Salesman, Rep Inc</span></h4>
      </div>
      <div class="item">
        <h4>"Could I... BE any more happy with this company?"<br><span style="font-style:normal;">Chandler Bing, Actor, FriendsAlot</span></h4>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>


<div id="contact" class="container-fluid">
  <h2 class="text-center">CONTACT</h2>
  <div class="row slideanim">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Chicago, US</p>
      <p><span class="glyphicon glyphicon-phone"></span> +00 1515151515</p>
      <p><span class="glyphicon glyphicon-envelope"></span> myemail@something.com</p> 
    </div>
    <div class="col-sm-7">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
        </div>
      </div> 
    </div>
  </div>
</div>

<footer class="container-fluid text-center bg-grey">

	<a href="#myPage" title="To Top">
		<span class="glyphicon glyphicon-chevron-up"></span>
	</a>
	<br>
	<p> © 2016 Ideation.
		<br>
		 <a href="http://teamtreehouse.com/terms">Terms</a> •
      <a href="http://teamtreehouse.com/privacy">Privacy</a>•
      <a href="http://teamtreehouse.com/support">Contact</a>
    </p>

    <!-- <ul class="social">
      <li><a href="http://twitter.com" class="twitter"></a></li>
      <li><a href="http://youtube.com" class="youtube"></a></li>
      <li><a href="http://facebook.com" class="facebook"></a></li>
      <li><a href="http://plus.google.com" class="google-plus"></a></li>
      <li><a href="http://linkedin.com" class="linkedin"></a></li>
      <li><a href="http://instagram.com" class="instagram"></a></li>
    </ul>

 -->

</footer>


</body>
</html>