<!DOCTYPE html>
<html>

  <head>
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">


    <script src="https://kit.fontawesome.com/13830254b4.js" crossorigin="anonymous"></script>



    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel="stylesheet" href="./css/swiper.min.css">
    <link href="OwlCarousel2-2.3.4/dist/assets/owl.carousel.css" rel="stylesheet" type="text/css">
    <!-- <link rel="stylesheet" href="./assets/produ"> -->
    <link href="OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  </head>

  <body>
    <section>
      <div class="headerSection">
        <div class="container-fluid">
          <div class="top">

            <nav class="navbar navbar-expand-lg">
              <a href="index1.php">
                <div class="logo"><img src="./assets/logo22.png"></div>
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                  <li class="nav-item"><a class="nav-item nav-link active text-uppercase" a href="index1.php">Dikshya</a></li>


                  <li class="nav-item-1"><a class="nav-item-1 nav-link  text-uppercase" a href="index1.html">Logout</a></li>
                </ul>


              </div>
            </nav>
          </div>
        </div>

      </div>
    </section>
    <section class="container">
      <div class="form-section" style="padding-top: 10rem;">
        <form method="POST">
          <div class="row">
            <div class=col-md-6>
              <label>Product Category Name</label>
              <input type="text" name="category_name">
            </div>
            <!-- <div class=col-md-6>
<label>Product Image</label>
<input type="file" name="category_name">
</div> -->
          </div>
          <button class="btn btn-primary" type="submit">Submit</button>
        </form>
      </div>
    </section> 
    <?php
    include 'sql-connection.php';

    if(isset($_POST)){
    	$categoryName=$_POST['category_name'];

    	if(empty($categoryName)){
    		echo "Fill All the fields.";
    	}else{
    		$sql="INSERT INTO product_category VALUES('','$categoryName','');"
    		if($conn->query($sql)===TRUE){
    			echo "Data has been saved.";
    		}else{
    			echo "Error".$conn->error;
    		}
    	}
    }

		
	?>

  </body>
    }

</html>
