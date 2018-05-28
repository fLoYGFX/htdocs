<?php

include "../../include.php";
include "nav.php";

if(!isset($_SESSION['user'])){
	header("Location: ../../login.php");
}

?>


<!DOCTYPE html>
<html lang="zxx">
<!-- Head -->

<head>
	<title>Maps:</title>
	<!-- Meta-Tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta-Tags -->
	<!-- Index-Page-CSS -->
	<link rel="stylesheet" href="css/style_map.css" type="text/css" media="all">
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<link rel="stylesheet" href="css/font-awesome.css" type="text/css" media="all" />

	<!-- //Custom-Stylesheet-Links -->
	<!--fonts -->
	<link href="//fonts.googleapis.com/css?family=Marcellus+SC" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	<!-- //fonts -->

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<!-- Font-Awesome-File-Links -->
	<!-- CSS -->
	<link rel="stylesheet" href="css/font-awesome.css" type="text/css" media="all">
	<!-- //Font-Awesome-File-Links -->
</head>
<!-- //Head -->
<!-- Body -->
<body>

	<?php echo $nav;?>

	<div class="banner">
		<div class="banner-layer">
			<h1 class="title-w3layouts">
				<span class="fa" aria-hidden="true"></span>MAPS:</h1>
		</div>

		<!-- cart's-Product-Display -->
		<div class="wthreeproductdisplay">
			<div class="container">
				<div class="top-grid" style="margin-left: 50px;">
					<div class="cart-grid" id="cart-1">
						<div class="img">
							<img src="images/mapicons/mirage.png" alt="img" >
						</div>
						<ul class="info" style="margin-left: 50px;">

							<li>12 Taktiken einsehbar!</li>
						</ul>
						<div class="snipcart-details ">
							<form action="mirage.php" method="post">
								<button type="submit" class="button w3l-cart" data-id="cart-1">Mirage</button>
							</form>
						</div>
					</div>
					<div class="cart-grid" id="cart-2">
						<div class="img">
							<img src="images/mapicons/cache.png" alt="img">
						</div>
						<ul class="info" style="margin-left: 50px;">

							<li>10 Taktiken einsehbar!</li>
						</ul>
						<div class="snipcart-details ">
							<form action="cache.php" method="post">
									<button type="submit" class="button w3l-cart" data-id="cart-3">Cache</button>
							</form>
						</div>
					</div>
					<div class="cart-grid" id="cart-3">
						<div class="img">
							<img src="images/mapicons/overpass.png" alt="img">
						</div>
						<ul class="info" style="margin-left: 50px;">

							<li>5 Taktiken einsehbar!</li>
						</ul>
						<div class="snipcart-details ">
							<form action="overpass.php" method="post">
									<button type="submit" class="button w3l-cart" data-id="cart-3">Overpass</button>
							</form>
						</div>
					</div>
					<div class="cart-grid" id="cart-4">
						<div class="img">
							<img src="images/mapicons/train.png" alt="img">
						</div>
						<ul class="info" style="margin-left: 50px;">

							<li>8 Taktiken einsehbar!</li>
						</ul>
						<div class="snipcart-details ">
							<form action="train.php" method="post">
									<button type="submit" class="button w3l-cart" data-id="cart-4">Train</button>
							</form>
						</div>
					</div>

					<div class="clear"></div>
				</div>
				<div class="bot-grid" style="margin-left: 50px;">
					<div class="cart-grid" id="cart-5">
						<div class="img">
							<img src="images/mapicons/inferno.png" alt="img">
						</div>
						<ul class="info" style="margin-left: 50px;">

							<li>29 Taktiken einsehbar!</li>
						</ul>
						<div class="snipcart-details ">
							<form action="inferno.php" method="post">
								<button type="submit" class="button w3l-cart" data-id="cart-5">Inferno</button>
							</form>
						</div>
					</div>


					<div class="clear"></div>
				</div>
			</div>
		</div>

		<?php echo $footerMaps?>

	</div>

	<!-- Default-JavaScript -->
	<script src="js/jquery-2.2.3.js"></script>
	<!-- Custom-JavaScript-File-Links -->



</body>
<!-- //Body -->

</html>
