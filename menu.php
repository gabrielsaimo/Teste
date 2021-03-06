
<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/styles.css" type="text/css">
    <script src="jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <title>Navibar bootstrap</title>
    <script>
   
// Open close dropdown on click
$(document).ready(function(){
$("li.dropdown").click(function(){
  if($(this).hasClass("open")) {
    $(this).find(".dropdown-menu").slideUp("fast");
    $(this).removeClass("open");
    $(this).toggleClass("open");
  }
  else { 
    $(this).find(".dropdown-menu show").slideDown("fast");
    $(this).toggleClass("open");

  }
  
});
});


// Navbar toggle
$(".navbar-toggle").click(function(){
	$(".navbar-collapse").toggleClass("collapse").slideToggle("fast");
});
  </script>
  </head>
  <body>



  <h1>Minimal Bootstrap Navbar</h1>
<nav class="navbar">
	<div class="container-fluid">
		<!-- Nav Header -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collapse-1" aria-expanded="false">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#"><span class="fa fa-home"></span><span class="link"> Home</span></a>
		</div>
		<!-- Nav Collapse -->
		<div class="navbar-collapse collapse" id="collapse-1">
			<!-- Nav Left -->
			<ul class="nav navbar-nav">
				<!-- Products -->
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
						<span class="fa fa-tags"></span><span class="link"> Products</span> <span class="fa fa-caret-down"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#"><span class="fa fa-tag"></span> Catalogue 1</a></li>
						<li><a href="#"><span class="fa fa-tag"></span> Catalogue 2</a></li>
					</ul>
				</li>
				<!-- Services -->
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
						<span class="fa fa-gears"></span><span class="link"> Services</span> <span class="fa fa-caret-down"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#"><span class="fa fa-gear"></span> Service 1</a></li>
						<li><a href="#"><span class="fa fa-gear"></span> Service 2</a></li>
						<li><a href="#"><span class="fa fa-gear"></span> Service 3</a></li>
					</ul>
				</li>
				<!-- About -->
				<li><a href="#"><span class="fa fa-info-circle"></span><span class="link"> About</span></a></li>
				<!-- Contact -->
				<li><a href="#"><span class="fa fa-phone"></span><span class="link"> Contact</span></a></li>
			</ul>
			<!-- Nav Right -->
			<form class="navbar-form navbar-right">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Search">
				</div>
				<button type="submit" class="btn"><span class="fa fa-search"></span></button>
			</form>
		</div>
	</div>
</nav>