<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">MyOnlineCart</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="#">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>

   
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search for Product</button>
    </form>
  </div>
</nav>


<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/cc1.jpg" alt="Mens Fashion" width="1500" height="800">
      <div class="carousel-caption">
        <h3>Mens Clothing</h3>
        <p>Remind yourself. Nobody built like you, you design yourself</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/bg4.jpg" alt="Womens Fasion" width="1500" height="800">
      <div class="carousel-caption">
        <h3>Womens Section</h3>
        <p>Fashion is what you adopt when you don’t know who you are</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/bg5.jpg" alt="Kids Fashion" width="1500" height="800">
      <div class="carousel-caption">
        <h3>Kids Fashion</h3>
        <p>Little fashionistas, big dreams!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section class="m-5">
	<div >
		<h2 class="text-center"> About Us</h2>
	</div>
	<div class="row mt-5">
		<div class="col-lg-6 col-12">
			<img src="images/cc3.jpg" class="img-fluid aboutimg" >
		</div>
		<div class="col-lg-6 col-12">
			<h2 class="display-4"> Shop Online Now </h2>
			<p class="py-4"> MyOnlineCart sells high-end, eco-conscious fashion and accessories for men and women. Their product descriptions match their style: sassy, yet classy. What I love about MyOnlineCart and the way they approach describing this heel (and other products) is that they speak in the language of their customers.  </p>
			<a href="#" class="btn btn-success">Wanna Know Us</a>		
		</div>
	</div>
</section>

<section class="m-5">
	<div class="pt-5">
		<h2 class="text-center"> Our Services </h2>
	</div>
	<div class="mt-5 container-fluid">
		<div class="row">
			 <div class="col-lg-4 col-md-4 col-12">
			 	<div class="card" >
				  <img class="card-img-top" src="images/vibe.jpg" alt="Card image">
				  <div class="card-body">
				    <h4 class="card-title">Shop your Vibe</h4>
				    <p class="card-text">Dress as if you’re going to a party.</p>
				    <a href="#" class="btn btn-primary">Shop Now</a>
				  </div>
				</div>
			 </div>
			  <div class="col-lg-4 col-md-4 col-12">
			 	<div class="card" >
				  <img class="card-img-top" src="images/style.jpg" alt="Card image">
				  <div class="card-body">
				    <h4 class="card-title">Max Style. Min Price</h4>
				    <p class="card-text">Fashion is defined by what you purchase; style is defined by what you do with it.</p>
				    <a href="#" class="btn btn-primary">See Discounts</a>
				  </div>
				</div>
			 </div>
			  <div class="col-lg-4 col-md-4 col-12">
			 	<div class="card" >
				  <img class="card-img-top" src="images/fav.jpg" alt="Card image">
				  <div class="card-body">
				    <h4 class="card-title">Customer Favourite</h4>
				    <p class="card-text">Fashion comes and goes, but style is timeless.</p>
				    <a href="#" class="btn btn-primary">Shop Now</a>
				  </div>
				</div>
			 </div>
		</div>
	</div>
</section>



<section class="m-5">
	<div class="pt-5">
		<h2 class="text-center"> Gallery</h2>
	</div>
	<div class="row mt-5">
		<div class="col-lg-4 col-md-4 col-12  mb-4">
		<h5 class="card-title">Men's Blazer</h5>
			<img src="images/g1.jpg" class="img-fluid">
			<a href="#" class="btn btn-primary">RS:5000</a>
			<select class="form-select" aria-label="Default select example">
  <option selected>Quantity</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="3">4</option>
  <option value="3">5</option>
</select>
		</div>
		<div class="col-lg-4 col-md-4 col-12  mb-4">
		<h5 class="card-title">Men's T-Shirt Half Sleeves</h5>
			<img src="images/g2.jpg" class="img-fluid">
			<a href="#" class="btn btn-primary">RS:799</a>
			<select class="form-select" aria-label="Default select example">
  <option selected>Quantity</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="3">4</option>
  <option value="3">5</option>
</select>
		</div><div class="col-lg-4 col-md-4 col-12  mb-4">
		<h5 class="card-title">Formal Shoes</h5>
			<img src="images/g3.jpg" class="img-fluid">
			<a href="#" class="btn btn-primary">RS:3499</a>
			<select class="form-select" aria-label="Default select example">
  <option selected>Quantity</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="3">4</option>
  <option value="3">5</option>
</select>
		</div><div class="col-lg-4 col-md-4 col-12  mb-4">
		<h5 class="card-title">Women's Blazer</h5>
			<img src="images/g4.jpg" class="img-fluid">
			<a href="#" class="btn btn-primary">RS:3799</a>
			<select class="form-select" aria-label="Default select example">
  <option selected>Quantity</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="3">4</option>
  <option value="3">5</option>
</select>
		</div><div class="col-lg-4 col-md-4 col-12  mb-4">
		<h5 class="card-title">Womens's Tshirt Half Sleeves</h5>
			<img src="images/g5.jpg" class="img-fluid">
			<a href="#" class="btn btn-primary">RS:1899</a>
			<select class="form-select" aria-label="Default select example">
  <option selected>Quantity</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="3">4</option>
  <option value="3">5</option>
</select>
		</div><div class="col-lg-4 col-md-4 col-12  mb-4">
		<h5 class="card-title">Track Suit</h5>
			<img src="images/g6.jpg" class="img-fluid">
			<a href="#" class="btn btn-primary">RS:4499</a>
			<select class="form-select" aria-label="Default select example">
  <option selected>Quantity</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="3">4</option>
  <option value="3">5</option>
</select>
		</div><div class="col-lg-4 col-md-4 col-12  mb-4">
		<h5 class="card-title">Kids Sweater Half Sleeves</h5>
			<img src="images/g7.jpg" class="img-fluid">
			<a href="#" class="btn btn-primary">RS:1499</a>
			<select class="form-select" aria-label="Default select example">
  <option selected>Quantity</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="3">4</option>
  <option value="3">5</option>
</select>
		</div><div class="col-lg-4 col-md-4 col-12  mb-4">
		<h5 class="card-title">T-Shirt + Jeans Pant Set of Two</h5>
			<img src="images/g8.jpg" class="img-fluid">
			<a href="#" class="btn btn-primary">RS:1199</a>
			<select class="form-select" aria-label="Default select example">
  <option selected>Quantity</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="3">4</option>
  <option value="3">5</option>
</select>
		</div><div class="col-lg-4 col-md-4 col-12  mb-4">
		<h5 class="card-title">Kids Half Pant Orange Color</h5>
			<img src="images/g9.jpg" class="img-fluid">
			<a href="#" class="btn btn-primary">RS:999</a>
			<select class="form-select" aria-label="Default select example">
  <option selected>Quantity</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="3">4</option>
  <option value="3">5</option>
</select>
		</div>
	</div>
</section>


<section class="my-5">
	<div class="pt-5">
		<h1 class="text-center">  Contact Us </h1>
	</div>

	<div class="w-50 m-auto">
		<form action="userdata.php" method="post">
		<div class="form-group">
	    <label for="pwd">Userame:</label>
	    <input type="text" class="form-control" name="user" >
	  </div>
	  <div class="form-group">
	    <label for="email">Email address:</label>
	    <input type="email" class="form-control" name="email" autocomplete="off">
	  </div>
	  <div class="form-group">
	    <label for="pwd">Mobile:</label>
	    <input type="text" class="form-control" name="mobile">
	  </div>
		<div class="form-group">
			<label for="comment">Comment:</label>
  <textarea class="form-control" rows="5" name="comment"></textarea>

		</div>
	

	  <button type="submit" class="btn btn-primary">Submit</button>
	</form>
		
	</div>
</section>

<footer>
	<div class=" bg-dark text-center text-capitalize">
		<h5 class="py-3 text-white">@MyOnlineCartProduction</h5>
	</div>
</footer>



</body>
</html>