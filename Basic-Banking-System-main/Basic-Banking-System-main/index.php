<!doctype html>
<html lang="en">
<head> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./css/index.css">
    <link rel="stylesheet" type="text/css" href="./css/navbar.css">
    <link rel="shortcut icon" type="img/png" href=".img/Bank_loho.png">
    <title>Basic Banking System</title>  
</head>

<body>
    <?php
    include 'navbar.php';
    ?>

    <!-- Start Main area -->
    <section class="site-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 site-title">
                    <h3 class="title-text">The Indian Bank</h3>
                    <h4 class="title-text">A basic banking sytem through which we can transfer money between multiple users.</h4>
                </div>
                <div class="col-lg-6 col-md-12 banner-image">
                    <img src="./img/Bank_index.jpg" alt="banner-img" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <!-- End Main area -->
    
    <!-- Start Service area -->
    <section class="container" id="services">
        <h2 class="heading">Our Services</h2>
        <div class="container  text-center">
          <div class="row">
            <div class="card col-md-3 mx-auto" style="width: 18rem;">
              <img src="./img/User.jfif" class="card-img-top mt-3 img" alt="Responsive image">
              <div class="card-body">
                <h5 class="card-title">View Customers</h5>
                <p class="card-text">View all Customer's data</p>
                <a href="transfermoney.php" class="btn btn-primary">View Customers</a>
              </div>
            </div>
            <div class="card col-md-3 mx-auto" style="width: 18rem;">
              <img src="./img/Transaction.png" class="card-img-top mt-3 img" alt="Responsive image">
              <div class="card-body">
                <h5 class="card-title">View Transactions</h5>
                <p class="card-text">View all the past transactions happened between different accounts</p>
                <a href="transactionhistory.php" class="btn btn-primary">View Transactions</a>
              </div>
            </div>
            <div class="card col-md-3 mx-auto" style="width: 18rem;">
              <img src="./img/Transfer.jpg" class="card-img-top mt-3 img" alt="Responsive image">
              <div class="card-body">
                <h5 class="card-title" id="harry">Transfer Money</h5>
                <p class="card-text"> Transfer Money between multiple accounts</p>
                <a href="transfermoney.php" class="btn btn-primary">Transfer Money</a>
              </div>
            </div>
          </div>
        </div>
        </div>
      </section>
    <!-- End Service area -->

    <!-- Start About area -->
    <section id="about" class="site-about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12  about-image">
                  <img src="./img/Bank_about.jpg" alt="banner-img" class="img-fluid">
                    
                </div>
                <div class="col-lg-6 col-md-12 about">
                  <h2>About</h2>
                  <p>The Indian Bank is just an project under the The sparks foundation as a part of intersnship. In which a dynamic website 
                    has to be created with dummy 10 users and transaction to be made between them .
			            <br>Here i have used HTML,CSS as a frontend and PHP as backend and MYSQL as a database.   
                  <br></p>
                </div>
            </div>
        </div>
    </section>
    <!-- End About area -->

    <!-- Start Footer area -->   
    <footer class="text-center bg-light  footer">
        <p>&copy 2021. Made by <b>STUTI LAD</b> <br> For the Project of  <b>THE SPARKS FOUNDATION</b></p>
    </footer>
    <!-- End Footer area -->
</body>
</html>
