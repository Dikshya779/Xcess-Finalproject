<!DOCTYPE html>
<html>

<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
		integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous" />
	<script src="https://kit.fontawesome.com/13830254b4.js" crossorigin="anonymous"></script>

	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<link href="OwlCarousel2-2.3.4/dist/assets/owl.carousel.css" rel="stylesheet" type="text/css">
	<link href="OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css" rel="stylesheet" type="text/css">
	<style>
		body {
			background-size: cover;
		}
	</style>
</head>

<body>


	<div class="headerSection">
		<div class="container-fluid">
			<div class="top">

				<nav class="navbar navbar-expand-lg">
					<a href="index1.php">
						<div class="logoInner"><img src="./assets/logo22.png"></div>
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse"
						data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
						aria-expanded="false" aria-label="Toggle navigation">
						<span class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></span>
					</button>

					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav NavInner">
							<li class="nav-item"><a class="nav-item nav-link active text-uppercase" a
									href="index1.php">Home</a></li>

							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
									data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									PRODUCT
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<ul>
										<li class="dropdown-item"><a class="nav-item nav-link active text-uppercase"
												href="artandcraft.php">Arts
												and craft</a></li>
										<li class="dropdown-item"><a class="nav-item nav-link active text-uppercase"
												href="games.php">Games</a>
										</li>
										<li class="dropdown-item"><a class="nav-item nav-link active text-uppercase"
												href="school.php">School
												Supplies</a></li>
										<li class="dropdown-item"><a class="nav-item nav-link active text-uppercase"
												href="office.php">Office
												Supplies</a></li>
									</ul>
								</div>
							</li>
							<li class="nav-item dropdown">
						  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							SIGNUP
						  </a>
						  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<ul>
								<li class="dropdown-item"><a
										class="nav-item nav-link active text-uppercase"
										href="register.php">Register</a></li>
								<li class="dropdown-item"><a
										class="nav-item nav-link active text-uppercase"
										href="login.php">Login</a>
								</li>
								<li class="dropdown-item"><a
										class="nav-item nav-link active text-uppercase"
										href="#">Profile</a></li>


					</div>
					</div>
				</nav>

			</div>

</ul>



		</div>
	</div>

	<br>



<div class="shopping">

<?php
/*
Author: Javed Ur Rehman
Website: https://www.allphptricks.com
*/
session_start();
$status="";
if (isset($_POST['action']) && $_POST['action']=="remove"){
if(!empty($_SESSION["shopping_cart"])) {
	foreach($_SESSION["shopping_cart"] as $key => $value) {
		if($_POST["code"] == $key){
		unset($_SESSION["shopping_cart"][$key]);
		$status = "<div class='box' style='color:red;'>
		Product is removed from your cart!</div>";
		}
		if(empty($_SESSION["shopping_cart"]))
		unset($_SESSION["shopping_cart"]);
			}		
		}
}

if (isset($_POST['action']) && $_POST['action']=="change"){
  foreach($_SESSION["shopping_cart"] as &$value){
    if($value['code'] === $_POST["code"]){
        $value['quantity'] = $_POST["quantity"];
        break; // Stop the loop after we've found the product
    }
}
  	
}
?>
<html>
<head>
<title>Demo Shopping Cart - AllPHPTricks.com</title>
<link rel='stylesheet' href='css/style.css' type='text/css' media='all' />
</head>
<body>
<div style="width:90%; margin: auto ;">

<h2 style="text-align: center;"> Shopping Cart</h2>   

<?php
if(!empty($_SESSION["shopping_cart"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart"]));
?>
<div class="cart_div">
<a href="cart.php">
<img src="cart-icon.png" /> Cart
<span><?php echo $cart_count; ?></span></a>
</div>
<?php
}
?>

<div class="cart">
<?php
if(isset($_SESSION["shopping_cart"])){
    $total_price = 0;
?>	
<table class="table">
<tbody>
<tr>
<td></td>
<td>ITEM NAME</td>
<td>QUANTITY</td>
<td>UNIT PRICE</td>
<td>ITEMS TOTAL</td>
</tr>	
<?php		
foreach ($_SESSION["shopping_cart"] as $product){
?>
<tr>
<td><img src='<?php echo $product["image1"]; ?>' width="70" height="60" /></td>
<td><?php echo $product["topic"]; ?> <br  />
<form method='post' action=''>
<input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
<input type='hidden' name='action' value="remove" />
<button type='submit' class='remove'>Remove Item</button>
</form>
</td>
<td>
<form method='post' action=''>
<input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
<input type='hidden' name='action' value="change" />
<select name='quantity' class='quantity' onchange="this.form.submit()">
<option <?php if($product["quantity"]==1) echo "selected";?> value="1">1</option>
<option <?php if($product["quantity"]==2) echo "selected";?> value="2">2</option>
<option <?php if($product["quantity"]==3) echo "selected";?> value="3">3</option>
<option <?php if($product["quantity"]==4) echo "selected";?> value="4">4</option>
<option <?php if($product["quantity"]==5) echo "selected";?> value="5">5</option>
</select>
</form>
</td>
<td><?php echo "Nrs. ".$product["price"]; ?></td>
<td><?php echo "Nrs ".$product["price"]*$product["quantity"]; ?></td>
</tr>
<?php
$total_price += ($product["price"]*$product["quantity"]);
}
?>
<tr>
<td colspan="5" align="right">
<strong>TOTAL: <?php echo "Nrs. ".$total_price; ?></strong>
</td>
</tr>
</tbody>
</table>		
  <?php
}else{
	echo "<h3>Your cart is empty!</h3>";
	}
?>
</div>

<div style="clear:both;"></div>

<div class="message_box" style="margin:10px 0px;">
<?php echo $status; ?>
</div>

<p><a href="index1.php" class="back">Go Back to Shopping</a></p>
<br /><br />

</div>
</div>


<div class="footerSection-1">
		<div class="container-4">
			<div class="row">
				<div class="col-md-4 col-xs-12">
					<img src="./assets/logo22.png" alt="">
					<p class="footerPara pt-3">Xcesstationery is a store that sells office supplies, paper,
						bags,pens,letter writing materials,& similar paper-based products.</p>
				</div>
				<div class="col-md-4 col-xs-12">
					<div class="middleFooter">
						<h5 class="pb-3">ABOUT</h5>
						<a href="index1.php">
							<li>Home</li>
						</a>
						<a href="#">
							<li>Contact Us
								<div class="contact-address">
									<i class="fa fa-map-marker" aria-hidden="true"></i> Address: Lalitpur,Nepal
								</div>
								<div class="phone">
									<i class="fa fa-phone" aria-hidden="true"></i> phone-no: +977-4242121
								</div>
								<div class="contact-email">
									<i class="fa fa-envelope" aria-hidden="true"></i> Email: xcess@gmail.com
								</div>

							</li>
						</a>

					</div>
				</div>

				<div class="col-md-4 col-xs-12">
					<div class="rightContent">
						<h5 class="pb-3">INFORMATION</h5>
						<li>Terms of Service</li>
						<li>Privacy Policy</li>
					</div>
				</div>

			</div>
			<div class="bottomSection">
				<div class="copyright">
					<p>© 2020 Pasls, All right reserved</p>
				</div>
			</div>
				<div class="socialMedia">
					<i class="fa fa-facebook-official" aria-hidden="true"></i>
					<i class="fa fa-envelope" aria-hidden="true"></i>

				</div>
			

		</div>
	</div>

	<!-- Footer section ends-->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
		integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
		crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
		integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
		crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
		integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
		crossorigin="anonymous"></script>

	<script type="text/javascript" src="OwlCarousel2-2.3.4/docs/assets/vendors/jquery.min.js"></script>
	<script src="OwlCarousel2-2.3.4/dist/owl.carousel.js"></script>

	<script type="text/javascript">
		var owl = $('.owl-carousel');
		owl.owlCarousel({
			items: 6,
			loop: true,
			margin: 10,
			autoplay: true,
			autoplayTimeout: 1000,
			autoplayHoverPause: true,
			responsive: {
				0: {
					items: 1
				},
				480: {
					items: 2
				},
				788: {
					items: 6
				}
			}
		});
		$('.play').on('click', function () {
			owl.trigger('play.owl.autoplay', [1000])
		})
		$('.stop').on('click', function () {
			owl.trigger('stop.owl.autoplay')
		})
	</script>
</body>

</html>