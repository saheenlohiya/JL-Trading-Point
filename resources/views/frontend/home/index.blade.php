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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
    top: 56%;
    transform: translateY(-54%);
}
.text-left{
    text-align: left;
}
.slider_box{
    /* width: 250px; */
    margin:0 auto;
    background: rgb(29 135 86 / 15%);
    border-radius:25px;
    padding:30px;
}
a.navbar-brand img {
    height: 80px;
}
.img_col{
    margin-top:-8%;
}
.slider_box ul.d-flex{
    flex-wrap:wrap;
}
.slider_box ul li{
    text-align:left;
}
.slider_box ul.d-flex.share_icon {
    justify-content: space-around;
    list-style: none;
}
h1 {
    font-weight: 800;
    font-size: 48px;
}
.slider_box ul.d-flex.share_icon li {
    height: 35px;
    width: 35px;
    text-align: center;
    line-height: 32px;
    font-size: 14px;
    border-radius: 50%;
    border: 2px solid #fff;
}
.slider_box ul.d-flex.share_icon li:hover {
    background: #fff;
    color: #000;
    transition: all 0.5s;
}

/* why section    */

section.why_choose_us.py-5 .container .row {
    justify-content: space-around;
}
section.why_choose_us.card-img, section.why_choose_us .card-img-bottom, section.why_choose_us .card-img-top {
    width: 60px;
    text-align: center;
    margin: auto;
}
section.why_choose_us .card {
    text-align: center;
    padding: 15px;
    box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
    border: none;
}
section.why_choose_us.py-5 a.btn.bg_transperant {
    color: #48a6eb;
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
                    <ul class="navbar-nav m-auto">
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
                            <div class="row">
                                <div class="col-6 text-left">
                                    <h1>Next generation trading platform</h1>
                                    <p>Trade Cryptocurrencies, Stock Indices, Commodities and Forex from a single account</p>
                                    <button type="button" class="btn btn-success m-2">Open free account</button>
                                    <button type="button" class="btn btn-success m-2">Preview platform</button>
                                </div>
                                <div class="col-6 px-5 img_col">
                                    <div class="slider_box ms-5 text-left">
                                        <p>24 hour volume (All markets)</p>
                                        <hr>
                                        <p>Trade with Icoprimex:</p>
                                        <ul class="d-flex">
                                            <li class="w-50">50+ markets</li>
                                            <li class="w-50">Margin trading</li>
                                            <li class="w-50">Long & Short</li>
                                            <li class="w-50">Secure wallets</li>
                                            <li class="w-50">24/7 service </li>
                                            <li class="w-50">Fees from 0.001%</li>
                                        </ul>
                                        <button type="button" class="btn btn-success m-2 w-100">Start trading</button>
                                        <p class="text-center mb-4">Registration takes only 40 seconds!</p>
                                        <ul class="d-flex share_icon">
                                            <li class=""><i class="fa-brands fa-angellist"></i></li>
                                            <li class=""><i class="fa-brands fa-twitter"></i></li>
                                            <li class=""><i class="fa-brands fa-facebook-f"></i></li>
                                            <li class=""><i class="fa-brands fa-telegram"></i></li>
                                            <li class=""><i class="fa-brands fa-youtube"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img src="./images/slide2.jpg" class="d-block w-100 slider_height" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <div class="row">
                                <div class="col-6 text-left">
                                    <h1>Let top traders do the job for you!</h1>
                                    <p>Covesting allows you to automatically copy top-performing traders and achieve the same returns</p>
                                    <button type="button" class="btn btn-success m-2">Discover Covesting</button>                                  
                                </div>
                                <div class="col-6 img_col">
                                    <img src="./images/bitcoin.png" class="d-block img-fluid w-75" alt="...">
                                </div>
                            </div>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img src="./images/slide33.jpg" class="d-block w-100 slider_height" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <div class="row">
                                <div class="col-6 text-left">
                                    <h1>Next generation trading platform</h1>
                                    <p>Trade Cryptocurrencies, Stock Indices, Commodities and Forex from a single account</p>
                                    <button type="button" class="btn btn-success m-2">Open free account</button>                                  
                                </div>
                                <div class="col-6 img_col">
                                    <img src="./images/slideimg.png" class="d-block img-fluid" alt="...">
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

<section class="why_choose_us py-5">
    <div class="container py-5">
        <h1 class="text-center mb-5 ">Why Choose us?
</h1>
        <div class="row mb-4">
            <div class="card" style="width: 31%;">
                <img src="./images/icon1.svg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Trade with the best</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn bg_transperant ">Read More <i class="fa-solid fa-angle-right"></i></a>
                </div>
            </div>
            <div class="card" style="width: 31%;">
                <img src="./images/icon2.svg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Find new opportunities</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn bg_transperant">Read More <i class="fa-solid fa-angle-right"></i></a>
                </div>
            </div>
            <div class="card" style="width: 31%;">
                <img src="./images/icon3.svg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Increase profitability</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn bg_transperant">Read More <i class="fa-solid fa-angle-right"></i></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="card" style="width: 31%;">
                <img src="./images/icon1.svg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Enjoy privacy and security</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn bg_transperant">Read More <i class="fa-solid fa-angle-right"></i></a>
                </div>
            </div>
            <div class="card" style="width: 31%;">
                <img src="./images/icon2.svg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn bg_transperant">Read More <i class="fa-solid fa-angle-right"></i></a>
                </div>
            </div>
            <div class="card" style="width: 31%;">
                <img src="./images/icon3.svg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn bg_transperant">Read More <i class="fa-solid fa-angle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="image_with_content">
    <div class="container">
        <h1 class="text-left mb-5 ">Maximize profits with leverage</h1>
        <p>Improve your trading results by using leverage (margin). Leverage is a powerful tool that allows you to open a position much larger in value than the amount you deposited</p>
            <div class="col-6 row">
                <div class="col">
                    <p>If Bitcoin increased from $7,000 to $7,045 your return would be equal to:</p> 
                    <a href="#" class="btn bg_transperant">Learn More <i class="fa-solid fa-angle-right"></i></a>
                    <h1>+0.64%</h1>
                    <P>without leverage</P>
                </div>
                <div class="col">
                    <p>If Bitcoin increased from $7,000 to $7,045 your return would be equal to:</p> 
                    <a href="#" class="btn bg_transperant">Learn More <i class="fa-solid fa-angle-right"></i></a>
                    <h1>+0.64%</h1>
                    <P>without leverage</P>
                </div>
            </div>
    </div>
</section>
</body>
</html>



                <div class="col-6">
                    <h1>+0.64%</h1>
                    <P>without leverage</P>
                </div>
                <div class="col-6  d-flex">
                    <h1>+0.64%</h1>
                    <P>without leverage</P>
                </div>
                <div class="col-6">
                    <h1>+0.64%</h1>
                    <P>without leverage</P>
                </div>
                <div class="col-6">
                    <h1>+0.64%</h1>
                    <P>without leverage</P>
                </div>