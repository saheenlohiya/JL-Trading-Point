<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

<style>
    body{
        font-family: 'Open Sans', sans-serif;
    }
.bg_transparent{
    background-color:transparent;
    }
    .carousel-dark .carousel-control-next-icon, .carousel-dark .carousel-control-prev-icon {
    filter: unset;
}
.slider_height{
    height:750px;
    object-fit: cover;
}
.slider_with_header{
    position: relative;
}
.header_absolute{
    position: absolute;
    top: 0;
    z-index: 999;
}
.slider_with_header .carousel-caption {
    top: 40%;
    transform: translateY(-40%);

}
.text-left{
    text-align: left;
}
</style>
</head>
<body>
    <section class="slider_with_header"> 
    <div class="container-fluid px-4 bg_transperant header_absolute">
        <div class="row">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#"><img src="./images/logo light.png"></a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Products
                            </a>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item  " href="#">Icoprimex Platform</a></li>
                              <li><a class="dropdown-item  " href="#">Covesting Module</a></li>
                            </ul>
                          </li>
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Markets
                            </a>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item " href="#">Cryptocurrencies</a></li>
                            </ul>
                          </li>
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Trading Tools
                            </a>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item " href="#">Cryptocurrency Price Charts</a></li>
                              <li><a class="dropdown-item " href="#">Commodity Price Charts</a></li>
                              <li><a class="dropdown-item " href="#">Copy Trading</a></li>
                            </ul>
                          </li>
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                About
                            </a>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item " href="#">About Us</a></li>
                              <li><a class="dropdown-item " href="#">Fees and Conditions</a></li>
                            </ul>
                          </li>
                    </ul>
                    <button type="button" class="btn btn-success m-2">Login</button>
                    <button type="button" class="btn btn-success m-2">Register</button>
                  </div>
                </div>
              </nav>
        </div>
    </div>

    <div class="slider_section">
        <div class="container-fluid">
            <div class="row">
                <div id="carouselExampleCaptions" class="carousel slide gx-0" data-bs-ride="false">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="./images/slide1.jpg" class="d-block w-100 slider_height" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <div class="row align-items-center">
                                <div class="col-6 text-left">
                                    <h1>Next generation <br>trading platform</h1>
                                    <p>Trade Cryptocurrencies, Stock Indices, Commodities and Forex from a single account</p>
                                    <button type="button" class="btn btn-success m-2">See all products</button>
                                </div>
                                <div class="col-6">
                                    <img src="./images/slide4.png" class="d-block w-100" alt="...">
                                </div>
                            </div>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img src="./images/slide2.jpg" class="d-block w-100 slider_height" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <div class="row align-items-center">
                                <div class="col-6 text-left">
                                    <h1>Next generation <br>trading platform</h1>
                                    <p>Trade Cryptocurrencies, Stock Indices, Commodities and Forex from a single account</p>
                                    <button type="button" class="btn btn-success m-2">Open free account</button>                                  
                                </div>
                                <div class="col-6">
                                    <img src="./images/slide4.png" class="d-block w-100" alt="...">
                                </div>
                            </div>
                        </div>
                      </div>

                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="Trade_Bitcoin py-5">
    <div class="container py-5">
        <div class="row">
            <div class="col-8">
                <h1>Trade Bitcoin, S&P 500, Gold, EURUSD and 50+ assets</h1>
                <p>Get easy access to <a href="#">Cryptocurrencies</a>, <a href="#">Stock Indices</a>, <a href="#">Commodities</a> and <a href="#">Stock Indices</a> markets from a single account</p>
                <button type="button" class="btn btn-success m-2">Open free account</button>
            </div>
            <div class="col-4 p-4">
              <ul class="menus d-flex">
                <li class="w-100">Markets</li>
                <li class="w-100">Last</li>
                <li class="w-100">Chg (24h)</li>
                <li class="w-100">Market</li>
                <li class="w-100">Last</li>
                <li class="w-100">Chg (24h)</li>
              </ul>
</div>
            </div>
        </div>
    </div>
</section>
</body>
</html>