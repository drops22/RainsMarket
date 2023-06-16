<!DOCTYPE html>
<html lang="en">
<head>
<title>My Project 36478</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Rains Market</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#sign">Sign In</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#about">About Us</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Categories
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#clothes">Clothes</a>
          <a class="dropdown-item" href="#cosmetics">Cosmetics</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#accessories">Accessories</a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<div class="carousel-inner">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="images/Slide1.png" alt="Black Friday">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="images/Slide2.png" alt="Discount">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="images/Slide3.png" alt="Fashion Discount">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<a id="clothes">
<section class="my-4">
  <div class="py-4">
    <h2 class="text-center">Fashion</h2>
  </div>

  <div class="container-fluid">
    <div class="row">
  <div class="col-lg-4 col-md-4 col-12">
    <img src="images/Fashions.jpg" class="img-fluid pb-3">
  </div>
  <div class="col-lg-4 col-md-4 col-12">
    <img src="images/Fashions2.png" class="img-fluid pb-3">
  </div>
  <div class="col-lg-4 col-md-4 col-12">
    <img src="images/Fashions3.png" class="img-fluid pb-3">
  </div>
  </div>
  </div>
</section>
</a>

<a id="cosmetics">
<section class="my-4">
  <div class="py-4">
    <h2 class="text-center">Cosmetics</h2>
  </div>

  <div class="container-fluid">
    <div class="row">
  <div class="col-lg-4 col-md-4 col-12">
    <img src="images/Cosmetics.png" class="img-fluid pb-3">
  </div>
  <div class="col-lg-4 col-md-4 col-12">
    <img src="images/Cosmetics2.png" class="img-fluid pb-3">
  </div>
  <div class="col-lg-4 col-md-4 col-12">
    <img src="images/Cosmetics3.png" class="img-fluid pb-3">
  </div>
  </div>
  </div>
</section>
</a>

<a id="accessories">
<section class="my-4">
  <div class="py-4">
    <h2 class="text-center">Accessories</h2>
  </div>

  <div class="container-fluid">
    <div class="row">
  <div class="col-lg-4 col-md-4 col-12">
    <img src="images/Accessories.png" class="img-fluid pb-3">
  </div>
  <div class="col-lg-4 col-md-4 col-12">
    <img src="images/Accessories2.png" class="img-fluid pb-3">
  </div>
  <div class="col-lg-4 col-md-4 col-12">
    <img src="images/Accessories3.png" class="img-fluid pb-3">
  </div>
  </div>
  </div>
</section>
</a>

<a id="sign">
<section class="my-4">
  <div class="py-4">
    <h2 class="text-center">SIGN IN</h2>
  </div>
  <div class="w-50 m-auto">
    <form action="about.php" method="post">
      <div class="form-group">
        <label>Name:</label>
        <input type="text" name="name" class="form-control">
      </div>
      <div class="form-group">
        <label>E-mail:</label>
        <input type="email" name="email" class="form-control">
      </div>
      <div class="form-group">
        <label>Password:</label>
        <input type="password" name="password" class="form-control">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</section>
</a>

<a id="about">
<section class="my-4">
  <div class="py-4">
    <h2 class="text-center">ABOUT US</h2>
    <div class="container-fluid">
        <p class="text-center"><b>Welcome to Rains Market, your premier destination for fashion, cosmetics, and accessories! We are passionate about curating a diverse and stylish collection that caters to your individuality and enhances your personal style.<br>
At Rains Market, we believe that fashion is not just about following trends but expressing your unique self. Our carefully selected range of clothing, cosmetics, and accessories reflects the latest fashion statements while allowing you to make a bold and confident statement of your own. <br> 
Thank you for choosing Rains Market. Let's embark on a stylish and empowering journey together!
</b></p>

    </div>
</selection>
</a>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
