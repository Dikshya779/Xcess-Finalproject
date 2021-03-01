<?php include('server.php') ?>
<style>
  <?php include('css/style.css') ?>
</style>
<!DOCTYPE html>

<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous" />
  <script src="https://kit.fontawesome.com/13830254b4.js" crossorigin="anonymous"></script>

  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href="OwlCarousel2-2.3.4/dist/assets/owl.carousel.css" rel="stylesheet" type="text/css">
  <link href="OwlCarousel2-2.3.4/di
  st/assets/owl.theme.default.min.css" rel="stylesheet" type="text/css">
  <style>
    body {
      background-size: cover;
    }
  </style>
</head>
<body>
  <div class="headerSection">
    <div class="container-fluid">
      <div class="top" style="top: 0">

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
              <li>
								<a href="cart/shopping_cart.php" style="font-size:20px; margin-top:5px;"><i class="fas fa-shopping-cart"></i></a>
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
        </nav>

      </div>





    </div>
  </div>

  <div class="Formheader">
  	<h2>Register</h2>
  </div>
	
  <form class="form2" method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>" required>
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>" required>
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1" required>
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2" required>
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php" button type="submit" class="btn btn-primary">Sign in</a>
  	</p>
  </form>


  <div style="padding-top:2rem" class="footerSection-2">
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


  <script src="js/swiper.min.js"></script>
  <script src="js/script.js"></script>

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
</body>
</html>