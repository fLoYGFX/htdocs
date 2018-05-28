<?php

include "php/include.php";

if(!isset($_SESSION['user'])){
	header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Team Effect | Kalender </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/font-awesome.css" type="text/css" media="all" />
<!--// css -->
<!-- font -->
<link href="//fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- //font -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
</head>
<body>

<?php echo $nav; ?>


	<!-- welcome -->
	<div class="welcome">
		<div class="container">
			<div class="agileits-title">

							</div>
						</div>
					</div>
					<!-- //welcome -->



					<!-- team -->
						<div class="team">
							<div class="container">




								
							</div>
						</div>
					<!-- //team -->


					<?php

						echo $footer;

					?>

				<div class="clearfix"> </div>
			</div>
			<div class="footer-top-agileinfo">
				<div class="social-wthree-icons bnragile-icons">
					<ul>
						<li><a href="#" class="fa fa-facebook icon icon-border facebook"> </a></li>
						<li><a href="#" class="fa fa-twitter icon icon-border twitter"> </a></li>
						<li><a href="#" class="fa fa-google-plus icon icon-border googleplus"> </a></li>
						<li><a href="#" class="fa fa-dribbble icon icon-border dribbble"> </a></li>
					</ul>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!-- //footer end here -->
	<script src="js/responsiveslides.min.js"></script>
		<!-- start-smooth-scrolling -->
			<script type="text/javascript" src="js/move-top.js"></script>
			<script type="text/javascript" src="js/easing.js"></script>
			<script type="text/javascript">
				jQuery(document).ready(function($) {
					$(".scroll").click(function(event){
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
			</script>
	<!-- //start-smoth-scrolling -->
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear'
				};
			*/

			$().UItoTop({ easingType: 'easeOutQuart' });

			});
	</script>
</body>
</html>
