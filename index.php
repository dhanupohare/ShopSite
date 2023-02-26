<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopsite using php and MySQL</title>
    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- css file -->
  <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- navbar -->
    <div class="container-fluid p-0">
        <!-- first child -->
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
  <div class="container-fluid p-0">
   <img src="./images/logo.JPEG" alt="" class="logo">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent p-0" >
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i><sup>1</sup></a>
        </li>
    
       
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<!--second child -->
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
  <ul class="navbar-nav me-auto">
  <li class="nav-item">
          <a class="nav-link" href="#">Welcome Guest</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Login</a>
        </li>
  </ul>
</nav>
<!-- third child -->
<div class="bg-light ">
  <h3 class="text-center">ShopSite</h3>
  <p class="text-center">communication is at the heart of e-commerce and community </p>
</div>

<!-- fourth child -->
<div class="row">
<div class="col-md-10">
  <!-- product -->
<div class="row">
  <div class="col-md-4 mb-2">
    <div class="card" style="width: 18rem;">
  <img src="./images/top.JPEG" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add to cart</a>
    <a href="#" class="btn btn-secondary">View more</a>
  </div>
</div></div>
  <div class="col-md-4 mb-2"><div class="card" style="width: 18rem;">
  <img src="./images/saree.JPEG" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add to cart</a>
    <a href="#" class="btn btn-secondary">View more</a>
  </div>
</div></div>
  <div class="col-md-4 mb-2"><div class="card" style="width: 18rem;">
  <img src="./images/kurti.JPEG" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add to cart</a>
    <a href="#" class="btn btn-secondary">View more</a>
  </div>
</div></div>
<div class="col-md-4 mb-2"><div class="card" style="width: 18rem;">
  <img src="./images/shirt.JPEG" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add to cart</a>
    <a href="#" class="btn btn-secondary">View more</a>
  </div>
</div></div>
<div class="col-md-4 mb-2"><div class="card" style="width: 18rem;">
  <img src="./images/jeans.JPEG" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add to cart</a>
    <a href="#" class="btn btn-secondary">View more</a>
  </div>
</div></div>
<div class="col-md-4 mb-2"><div class="card" style="width: 18rem;">
  <img src="./images/jacket.JPEG" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add to cart</a>
    <a href="#" class="btn btn-secondary">View more</a>
  </div>
</div></div>



</div>
</div>
<div class="col-md-2 bg-secondary p-0">
<ul class="navbar-nav mg-auto text-center">
  <li class="nav-item bg-info">
    <a href="#" class="nav-link text-light"><h4>Delivery Brands</h4></a>
  </li>

  <li class="nav-item ">
    <a href="#" class="nav-link text-light">Brands 1</a>
  </li>
  <li class="nav-item">
    <a href="#" class="nav-link text-light">Brands 2</a>
  </li>
  <li class="nav-item ">
    <a href="#" class="nav-link text-light">Brands 3</a>
  </li>
  <li class="nav-item ">
    <a href="#" class="nav-link text-light">Brands 4</a>
  </li>
  <li class="nav-item ">
    <a href="#" class="nav-link text-light">Brands 5</a>
  </li>
  <li class="nav-item ">
    <a href="#" class="nav-link text-light">Brands 6</a>
  </li>
</ul>


  <!-- categories to be displayed -->
<ul class="navbar-nav mg-auto text-center">
  <li class="nav-item bg-info">
    <a href="#" class="nav-link text-light text-center"><h4>Categories</h4></a>
  </li>

  <li class="nav-item ">
    <a href="#" class="nav-link text-light text-center">categories 1</a>
  </li>
  <li class="nav-item">
    <a href="#" class="nav-link text-light text-center">categories 2</a>
  </li>
  <li class="nav-item ">
    <a href="#" class="nav-link text-light text-center">categories3</a>
  </li>
  <li class="nav-item ">
    <a href="#" class="nav-link text-light text-center">categories4</a>
  </li>
  <li class="nav-item ">
    <a href="#" class="nav-link text-light text-center">categories5</a>
  </li>
  <li class="nav-item ">
    <a href="#" class="nav-link text-light text-center">categories6</a>
  </li>
</ul>


</div>
</div>


  <!-- last child -->
<div class="bg-info p-3 text-center ">
    <p>All rights reserved @- Designed by GPK Student-2023</p>
</div>
    </div>



<!-- bootstrap js link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>