<<<<<<< HEAD
<<<<<<< HEAD
@extends('frontend.layouts.master')
@section('head')
@endsection
@section('content')
<section class="slider_with_header">
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
                     <div class="carousel-caption d-md-block">
                        <div class="row">
                           <div class="col-12 col-lg-6 text-left display_none">
                              <h1 class="text-capitalize">Next generation trading platform</h1>
                              <p>Trade Cryptocurrencies, Stock Indices, Commodities and Forex from a single account</p>
                              <button type="button" class="btn bg_skyblue m-2 px-4 text-capitalize">Open free account</button>
                              <button type="button" class="btn bg_skyblue m-2 px-4 text-capitalize">Preview platform</button>
                           </div>
                           <div class="col-12 col-lg-6 px-lg-2 px-md-4 px-1 img_col">
                              <div class="slider_box m-auto mb-2 mb-md-4 mb-lg-4 text-center">
                                 <p>24 hour volume (All markets)</p>
                                 <hr>
                                 <p>Trade with Icoprimex:</p>
                                 <ul class="d-flex mb-2">
                                    <li class="w-50">50+ markets</li>
                                    <li class="w-50">Margin trading</li>
                                    <li class="w-50">Long & Short</li>
                                    <li class="w-50">Secure wallets</li>
                                    <li class="w-50">24/7 service </li>
                                    <li class="w-50">Fees from 0.001%</li>
                                 </ul>
                                 <button type="button" class="btn bg_skyblue m-2 text-capitalize">Start trading</button>
                                 <p class="text-center mb-lg-4 mb-md-3 mb-2">Registration takes only 40 seconds!</p>
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
                     <div class="carousel-caption d-md-block">
                        <div class="row">
                           <div class="col-12 col-lg-6 text-left">
                              <h1 class="text-capitalize">Let top traders do the job for you!</h1>
                              <p>Covesting allows you to automatically copy top-performing traders and achieve the same returns</p>
                              <button type="button" class="btn bg_skyblue m-2 px-4 text-capitalize">Discover Covesting</button>
                           </div>
                           <div class="col-12 col-lg-6 img_col"> <img src="./images/bitcoin.png" class="d-block img-fluid w-md-50 w-lg-75" alt="..."> </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <img src="./images/slide33.jpg" class="d-block w-100 slider_height" alt="...">
                     <div class="carousel-caption d-md-block">
                        <div class="row">
                           <div class="col-12 col-lg-6 text-left">
                              <h1 class="text-capitalize">Next generation trading platform</h1>
                              <p>Trade Cryptocurrencies, Stock Indices, Commodities and Forex from a single account</p>
                              <button type="button" class="btn bg_skyblue m-2 px-4 text-capitalize">Open free account</button>
                           </div>
                           <div class="col-12 col-lg-6 img_col"> <img src="./images/slideimg.png" class="d-block img-fluid" alt="..."> </div>
                        </div>
                     </div>
                  </div>
               </div>
               <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="visually-hidden">Previous</span> </button>
               <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="visually-hidden">Next</span> </button>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="why_choose_us">
   <div class="container py-lg-5 py-md-4 py-4">
      <h1 class="text-center mb-lg-5 heading_light text-capitalize mb-3">Why Choose us?</h1>
      <div class="row mb-lg-4 mb-md-0 mb-0 justify-content-around">
         <div class="card">
            <img src="./images/icon1.svg" class="card-img-top" alt="...">
            <div class="card-body">
               <h5 class="card-title text-capitalize">Trade with the best</h5>
               <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
               <a href="#" class="btn bg_transperant text-capitalize">Read More <i class="fa-solid fa-angle-right"></i></a> 
            </div>
         </div>
         <div class="card">
            <img src="./images/icon2.svg" class="card-img-top" alt="...">
            <div class="card-body">
               <h5 class="card-title text-capitalize">Find new opportunities</h5>
               <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
               <a href="#" class="btn bg_transperant text-capitalize">Read More <i class="fa-solid fa-angle-right"></i></a> 
            </div>
         </div>
         <div class="card">
            <img src="./images/icon3.svg" class="card-img-top" alt="...">
            <div class="card-body">
               <h5 class="card-title text-capitalize">Increase profitability</h5>
               <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
               <a href="#" class="btn bg_transperant text-capitalize">Read More <i class="fa-solid fa-angle-right"></i></a> 
            </div>
         </div>
      </div>
      <div class="row justify-content-around">
         <div class="card">
            <img src="./images/icon1.svg" class="card-img-top" alt="...">
            <div class="card-body">
               <h5 class="card-title text-capitalize">Enjoy privacy and security</h5>
               <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
               <a href="#" class="btn bg_transperant text-capitalize">Read More <i class="fa-solid fa-angle-right"></i></a> 
            </div>
         </div>
         <div class="card">
            <img src="./images/icon2.svg" class="card-img-top" alt="...">
            <div class="card-body">
               <h5 class="card-title text-capitalize">Card title</h5>
               <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
               <a href="#" class="btn bg_transperant text-capitalize">Read More <i class="fa-solid fa-angle-right"></i></a> 
            </div>
         </div>
         <div class="card">
            <img src="./images/icon3.svg" class="card-img-top" alt="...">
            <div class="card-body">
               <h5 class="card-title text-capitalize">Card title</h5>
               <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
               <a href="#" class="btn bg_transperant text-capitalize">Read More <i class="fa-solid fa-angle-right"></i></a> 
            </div>
         </div>
      </div>
   </div>
</section>
<section class="image_with_content py-lg-5 py-md-4 py-4 bg_dark">
   <div class="container">
      <h1 class="text-left mb-lg-5 heading_light text-light text-capitalize">Maximize profits with leverage</h1>
      <p class="text-light">Improve your trading results by using leverage (margin). Leverage is a powerful tool that allows you to open a position much larger in value than the amount you deposited</p>
      <a href="#" class="btn bg_transperant mb-lg-4 mb-md-3 mb-2 text-capitalize text-light">Learn More <i class="fa-solid fa-angle-right"></i></a>
      <div class="row align-items-center">
         <div class="col-12 col-lg-6">
            <div class="row mb-lg-5">
               <div class="col">
                  <h2 class="heading_light mb-lg-3 text-light">+0.64%</h2>
                  <P class="text-capitalize text-light"><b>without leverage</b></P>
               </div>
               <div class="col">
                  <h2 class="heading_light mb-lg-3 text-light">+12.8%</h2>
                  <P class="text-capitalize text-light"><b>with 1:20 leverage</b></P>
               </div>
            </div>
            <div class="row mb-lg-3">
               <div class="col">
                  <h2 class="heading_light mb-lg-3 text-light">+32%</h2>
                  <P class="text-capitalize text-light"><b>with 1:50 leverage</b></P>
               </div>
               <div class="col">
                  <h2 class="heading_light mb-lg-3 text-light">+0.64%</h2>
                  <P class="text-capitalize text-light"><b>with 1:100 leverage</b></P>
               </div>
            </div>
            <button type="button" class="btn bg_skyblue m-2 btn-lg mb-lg-4 mb-md-3 mb-2 px-lg-5 px-md-4 px-1 text-capitalize text-light">Get started</button>
            <p class="text-light">Margin trading involves risk. <a href="#">See Risk Disclosure</a></p>
         </div>
         <div class="col-12 col-lg-6 mb-md-4"> <img src="./images/trade.svg" class="d-block img-fluid shadow-sm mb-3" alt="..."> </div>
      </div> 
   </div>
</section>
<section class="our_services py-lg-5 py-md-4 py-4">
   <div class="container">
      <h1 class="text-center mb-lg-5 heading_light text-capitalize mb-3">Open a free account and start trading in minutes!</h1>
      <div class="row align-items-center">
         <div class="col-12 col-lg-6"> <img src="./images/hero.png" class="d-block img-fluid shadow-sm mb-3" alt="..."> </div>
         <div class="col-12 col-lg-6">
            <ul class="list-style-none mb-lg-5">
               <li>
                  <p><i class="fa-solid fa-check "></i><b> Best-in-class platform </b></p>
                  <p> Become a better trader with advanced trading tools. Icoprimex provides an award-winning platform that is used by traders from around the world.</p>
               </li>
               <li>
                  <p><i class="fa-solid fa-check "></i><b> Global markets</b></p>
                  <p> Icoprimex allows its users to access multiple markets from a single account. Trade Cryptocurrencies, Forex, Commodities, and much more.</p>
               </li>
               <li>
                  <p><i class="fa-solid fa-check "></i><b> 24/7 support</b></p>
                  <p> Our customer service team works 24/7 to provide you with an exceptional level of support.</p>
               </li>
            </ul>
            <button type="button" class="btn bg_skyblue ms-4 mb-lg-4 mb-md-3 mb-2 px-4 text-capitalize">Open account</button>
            <p class="ps-4">Registration takes only 40 seconds!</p>
         </div>
      </div>
   </div>
</section>
<section class="blog_section py-lg-5 py-md-4 py-4 bg_dark">
   <div class="container">
      <h1 class="text-center mb-lg-5 heading_light text-light text-capitalize">Our Blog</h1>
      <div class="row mb-lg-4 mb-md-3 mb-2 justify-content-around">
         <div class="card">
            <img src="./images/blog1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
               <h5 class="card-title text-capitalize">Bitcoin Investment</h5>
               <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias non nulla placeat, odio, qui dicta alias.</p>
               <a href="#" class="btn bg_transperant text-capitalize">Read More <i class="fa-solid fa-angle-right"></i></a> 
            </div>
         </div>
         <div class="card">
            <img src="./images/blog2.jpg" class="card-img-top img-fluid" alt="...">
            <div class="card-body">
               <h5 class="card-title text-capitalize">Bitcoin Investment</h5>
               <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias non nulla placeat, odio, qui dicta alias.</p>
               <a href="#" class="btn bg_transperant text-capitalize">Read More <i class="fa-solid fa-angle-right"></i></a> 
            </div>
         </div>
         <div class="card">
            <img src="./images/blog3.jpg" class="card-img-top" alt="...">
            <div class="card-body">
               <h5 class="card-title text-capitalize">Bitcoin Exchange</h5>
               <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias non nulla placeat, odio, qui dicta alias.</p>
               <a href="#" class="btn bg_transperant text-capitalize">Read More <i class="fa-solid fa-angle-right"></i></a> 
            </div>
         </div>
      </div>
   </div>
</section>
<section class="media_section py-lg-5 py-md-4 py-4">
   <div class="container position-relative">
      <h1 class="text-center mb-lg-5 heading_light text-capitalize mb-3"> JL Treding Point in the Media</h1>
      <div class="justify-content-around slick-carousel">
         <div class=" text-center shadow-sm p-4">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias non nulla placeat, odio, qui dicta alias.</p>
            <img src="./images/yahoo.png" class="media_image" alt="..."> 
         </div>
         <div class=" text-center shadow-sm p-4">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias non nulla placeat, odio, qui dicta alias.</p>
            <img src="./images/ewn.png" class="media_image" alt="..."> 
         </div>
         <div class=" text-center shadow-sm p-4">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias non nulla placeat, odio, qui dicta alias.</p>
            <img src="./images/coin_codex.png" class="media_image" alt="..."> 
         </div>
         <div class=" text-center shadow-sm p-4">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias non nulla placeat, odio, qui dicta alias.</p>
            <img src="./images/bitcoin_exchange.png" class="media_image" alt="..."> 
         </div>
         <div class=" text-center shadow-sm p-4">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias non nulla placeat, odio, qui dicta alias.</p>
            <img src="./images/business.png" class="media_image" alt="..."> 
         </div>
         <div class=" text-center shadow-sm p-4">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias non nulla placeat, odio, qui dicta alias.</p>
            <img src="./images/amb_crypto.png" class="media_image" alt="..."> 
         </div>
         <div class=" text-center shadow-sm p-4">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias non nulla placeat, odio, qui dicta alias.</p>
            <img src="./images/market_watch.png" class="media_image" alt="..."> 
         </div>
      </div>
   </div>
</section>
<section class="cta_section py-lg-5 py-md-4 py-4 bg_dark">
   <div class="container text-center">
      <h1 class="text-center mb-lg-5 heading_light text-light text-capitalize"> Subscribe To Our Newsletter</h1>
      <p class="text-light mb-lg-4 mb-md-3 mb-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias non nulla placeat, odio, qui dicta alias.</p>
      <form action="">
         <!--Grid row-->
         <div class="row d-flex justify-content-center">
            <div class="col-md-6 col-lg-6 col-12">
               <!-- Email input -->
               <div class="form-outline form-white d-flex ">
                  <input type="email" id="form5Example21" placeholder="Enter Your Email" class="form-control" />
                  <!-- <label class="form-label" for="form5Example21">Email address</label> -->
                  <button type="submit " class="btn btn-outline-light bg_skyblue_light px-4 text-capitalize mb-lg-4 mb-md-3 mb-2 text-light"> Subscribe </button>
               </div>
            </div>
         </div>
         <!--Grid row-->
      </form>
   </div>
</section>
@endsection
@section('script')
@endsection
=======
=======
>>>>>>> b4de8313eaf2641f86b8e671814b625408e38f4b
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
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" />
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
	<style>
	body {
		font-family: 'Open Sans', sans-serif;
		overflow-x: hidden;
	}
	
	.bg_dark {
		background: #004c86;
	}
	
	.bg_skyblue {
		background: #1E79A8;
		color: #fff;
	}
	
	.bg_skyblue:hover {
		background: #004C86;
		color: #fff;
		transition: all 0.5s;
		border-color: #004C86;
	}
	
	.bg_skyblue_light {
		background: #1E79A8;
		color: #fff;
		border-color: #1E79A8;
	}
	
	.bg_skyblue_light:hover {
		background: #0000;
		color: #fff;
		transition: all 0.5s;
		border-color: #fff;
	}
	
	.bg_transparent {
		background-color: transparent;
	}
	
	.carousel-dark .carousel-control-next-icon,
	.carousel-dark .carousel-control-prev-icon {
		filter: unset;
	}
	
	.slider_height {
		height: 800px;
		object-fit: cover;
	}
	
	.slider_with_header {
		position: relative;
	}
	
	.header_absolute {
		position: absolute;
		top: 0;
		z-index: 999;
	}
	
	a.nav-link.dropdown-toggle.text-light.text-uppercase,
	.navbar-expand-lg button.btn.btn-success.m-2.text-uppercase {
		font-size: 14px;
	}
	
	.slider_with_header .carousel-caption {
		top: 56%;
		transform: translateY(-54%);
	}

	.text-left {
		text-align: left;
	}
	
	.slider_box {
		/* width: 250px; */
		margin: 0 auto;
		background: rgb(29 135 86 / 15%);
		border-radius: 25px;
		padding: 30px;
	}
	
	a.navbar-brand img {
		height: 120px;
	}
	
	.navbar .dropdown-menu a.dropdown-item {
		font-size: 14px;
		font-weight: 600;
	}
	
	.img_col {
		margin-top: -8%;
	}
	
	.slider_box ul.d-flex {
		flex-wrap: wrap;
	}
	
	.slider_box ul li {
		text-align: left;
	}
	
	.slider_box ul.d-flex.share_icon,
	.our_services ul {
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
	/* ----------------------------- */
	
	.footer_section .share_icon,
	.footer_section ul {
		/* justify-content: space-around; */
		list-style: none;
		padding: 0;
		/* text-align:center; */
	}
	
	h1 {
		font-weight: 800;
		font-size: 48px;
	}
	
	.footer_section li.footer_li {
		margin-bottom: 10px;
	}
	
	.footer_section p {
		font-weight: 600;
		margin-top: 8px;
		margin-bottom: 8px;
	}
	
	.footer_section .share_icon li {
		margin-right: 15px;
		height: 35px;
		width: 35px;
		text-align: center;
		line-height: 32px;
		font-size: 14px;
		border-radius: 50%;
		border: 2px solid #004c86;
		background: #004c86;
		color: #f8f9fa;
	}
	
	.footer_section .share_icon li:hover {
		background: transparent;
		color: #004c86;
		border: 2px solid #004c86;
		transition: all 0.5s;
	}
	
	.footer_section .footer_li a {
		text-decoration: none;
	}
	
	.footer_section .footer_li a {
		font-weight: 600;
		text-decoration: none;
	}
	
	.footer_section .footer_li a {
		color: #000;
	}
	
	.footer_section .footer_li a:hover {
		color: #004c86;
	}
	
	a.btn.bg_transperant.text-capitalize {
		border: 1px solid #004c86;
		color: #004c86;
	}
	
	a.btn.bg_transperant.text-capitalize:hover {
		border: 1px solid #1E79A8;
		background: #1E79A8;
		color: #fff;
		transition: all 0.5s;
	}
	
	section.why_choose_us .card:hover {
		transition: all 0.5s;
		box-shadow: rgb(149 157 165 / 50%) 0px 8px 24px;
	}
	/* why section    */
	
	section.why_choose_us.py-lg-5 py-md-3 py-2 .container .row {
		justify-content: space-around;
	}
	
	section.why_choose_us.card-img,
	section.why_choose_us .card-img-bottom,
	section.why_choose_us .card-img-top {
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
	
	section.why_choose_us.py-lg-5 py-md-3 py-2 a.btn.bg_transperant {
		color: #48a6eb;
	}
	
	.heading_light {
		font-weight: 500;
	}
	/* our services */
	
	.our_services i {
		color: #b8e986;
	}
	/* blog section   */
	
	.blog_section .card {
		padding: 0;
	}
	
	h5.card-title {
		text-transform: uppercase;
		font-weight: 700;
	}
	/* media_section   */
	
	.media_section img.media_image {
		width: 120px;
	}
	
	.media_section .slick-track {
		display: flex;
		align-items: center;
	}
	
	.media_section .slick-list.draggable {
		overflow: hidden;
	}
	
	.media_section .slick-slide {
		margin: 15px;
		height: 200px;
		cursor: pointer;
	}
	/* cta section    */
	
	.cta_section .form-control {
		height: 40px;
	}
	
	.cta_section button.btn.btn-outline-light.bg_skyblue_light {
		border-radius: 0 25px 25px 0;
		height: 40px;
	}
	
	.cta_section .form-control {
		border-radius: 25px 0 0 25px;
	}
	
	.why_choose_us .card,
	.blog_section .card {
		width: 31%;
	}
	/* media query   */
	
	@media(max-width:992px) {
		.slider_with_header .navbar-collapse {
    background: #004c86;
    padding: 15px;
}
		.image_with_content .row.align-items-center,
		.slider_with_header .carousel-caption .row {
			flex-direction: column-reverse;
		}
		.slider_with_header .carousel-caption {
			top: 46%;
			transform: translateY(-54%);
		}
		.img_col {
			margin-top: 0%;
		}
		.slider_section .img-fluid {
			max-width: 60%;
			margin: auto;
		}
		h1.text-capitalize {
			font-size: 32px;
		}
		.media_section .slick-slide {
			margin: 15px;
			height: 290px;
			cursor: pointer;
		}
		.why_choose_us .card,
		.blog_section .card {
			width: 90%;
		}
		section.why_choose_us .card,
		.blog_section .card {
			margin: 15px;
		}
		.navbar-toggler-icon {
			filter: brightness(0) invert(1);
		}
		.navbar-toggler {
			border: 2px solid #8c8e92;
		}
	}
	</style>
</head>

<body>
	<section class="slider_with_header">
		<div class="container-fluid px-4 bg_transperant header_absolute">
			<div class="row">
				<nav class="navbar navbar-expand-lg">
					<div class="container-fluid">
						<a class="navbar-brand" href="#"><img src="{{ asset('public/images/newlogo.png') }}" ></a>
						<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav m-auto">
								<li class="nav-item dropdown"> <a class="nav-link dropdown-toggle text-light text-uppercase" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Products
                            </a>
									<ul class="dropdown-menu">
										<li><a class="dropdown-item  text-uppercase" href="#">Icoprimex Platform</a></li>
										<li><a class="dropdown-item  text-uppercase" href="#">Covesting Module</a></li>
									</ul>
								</li>
								<li class="nav-item dropdown"> <a class="nav-link dropdown-toggle text-light text-uppercase" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Markets
                            </a>
									<ul class="dropdown-menu">
										<li><a class="dropdown-item text-uppercase" href="#">Cryptocurrencies</a></li>
									</ul>
								</li>
								<li class="nav-item dropdown"> <a class="nav-link dropdown-toggle text-light text-uppercase" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Trading Tools
                            </a>
									<ul class="dropdown-menu">
										<li><a class="dropdown-item text-uppercase" href="#">Cryptocurrency Price Charts</a></li>
										<li><a class="dropdown-item text-uppercase" href="#">Commodity Price Charts</a></li>
										<li><a class="dropdown-item text-uppercase" href="#">Copy Trading</a></li>
									</ul>
								</li>
								<li class="nav-item dropdown"> <a class="nav-link dropdown-toggle text-light text-uppercase" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                About
                            </a>
									<ul class="dropdown-menu">
										<li><a class="dropdown-item text-uppercase" href="#">About Us</a></li>
										<li><a class="dropdown-item text-uppercase" href="#">Fees and Conditions</a></li>
									</ul>
								</li>
							</ul>
							<button type="button" class="btn bg_skyblue m-2 text-uppercase">Login</button>
							<button type="button" class="btn bg_skyblue m-2 text-uppercase">Register</button>
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
							<div class="carousel-item active"> <img src="public/images/slide1.jpg" class="d-block w-100 slider_height" alt="...">
								<div class="carousel-caption d-md-block">
									<div class="row">
										<div class="col-12 col-lg-6 text-left">
											<h1 class="text-capitalize">Next generation trading platform</h1>
											<p>Trade Cryptocurrencies, Stock Indices, Commodities and Forex from a single account</p>
											<button type="button" class="btn bg_skyblue m-2 px-4 text-capitalize">Open free account</button>
											<button type="button" class="btn bg_skyblue m-2 px-4 text-capitalize">Preview platform</button>
										</div>
										<div class="col-12 col-lg-6 px-5 img_col">
											<div class="slider_box ms-lg-5 ms-md-3 m-auto mb-2 mb-md-4 mb-lg-4 text-left">
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
												<button type="button" class="btn bg_skyblue m-2 w-100 text-capitalize">Start trading</button>
												<p class="text-center mb-lg-4 mb-md-3 mb-2">Registration takes only 40 seconds!</p>
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
							<div class="carousel-item"> <img src="{{ asset('public/images/slide2.jpg') }}" class="d-block w-100 slider_height" alt="...">
								<div class="carousel-caption d-md-block">
									<div class="row">
										<div class="col-12 col-lg-6 text-left">
											<h1 class="text-capitalize">Let top traders do the job for you!</h1>
											<p>Covesting allows you to automatically copy top-performing traders and achieve the same returns</p>
											<button type="button" class="btn bg_skyblue m-2 px-4 text-capitalize">Discover Covesting</button>
										</div>
										<div class="col-12 col-lg-6 img_col"> <img src="{{ asset('./images/bitcoin.png') }}" class="d-block img-fluid w-md-50 w-lg-75" alt="..."> </div>
									</div>
								</div>
							</div>
							<div class="carousel-item"> <img src="{{ asset('images/slide33.jpg') }}" class="d-block w-100 slider_height" alt="...">
								<div class="carousel-caption d-md-block">
									<div class="row">
										<div class="col-12 col-lg-6 text-left">
											<h1 class="text-capitalize">Next generation trading platform</h1>
											<p>Trade Cryptocurrencies, Stock Indices, Commodities and Forex from a single account</p>
											<button type="button" class="btn bg_skyblue m-2 px-4 text-capitalize">Open free account</button>
										</div>
										<div class="col-12 col-lg-6 img_col"> <img src="{{ asset('images/slideimg.png') }}" class="d-block img-fluid" alt="..."> </div>
									</div>
								</div>
							</div>
						</div>
						<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="visually-hidden">Previous</span> </button>
						<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="visually-hidden">Next</span> </button>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="why_choose_us">
		<div class="container py-lg-5 py-md-3 py-2">
			<h1 class="text-center mb-lg-5 heading_light text-capitalize">Why Choose us?</h1>
			<div class="row mb-lg-4 mb-md-3 mb-0 justify-content-around">
				<div class="card"> <img src="./images/icon1.svg" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title text-capitalize">Trade with the best</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> <a href="#" class="btn bg_transperant text-capitalize">Read More <i class="fa-solid fa-angle-right"></i></a> </div>
				</div>
				<div class="card"> <img src="./images/icon2.svg" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title text-capitalize">Find new opportunities</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> <a href="#" class="btn bg_transperant text-capitalize">Read More <i class="fa-solid fa-angle-right"></i></a> </div>
				</div>
				<div class="card"> <img src="./images/icon3.svg" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title text-capitalize">Increase profitability</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> <a href="#" class="btn bg_transperant text-capitalize">Read More <i class="fa-solid fa-angle-right"></i></a> </div>
				</div>
			</div>
			<div class="row justify-content-around">
				<div class="card"> <img src="./images/icon1.svg" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title text-capitalize">Enjoy privacy and security</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> <a href="#" class="btn bg_transperant text-capitalize">Read More <i class="fa-solid fa-angle-right"></i></a> </div>
				</div>
				<div class="card"> <img src="./images/icon2.svg" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title text-capitalize">Card title</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> <a href="#" class="btn bg_transperant text-capitalize">Read More <i class="fa-solid fa-angle-right"></i></a> </div>
				</div>
				<div class="card"> <img src="./images/icon3.svg" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title text-capitalize">Card title</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> <a href="#" class="btn bg_transperant text-capitalize">Read More <i class="fa-solid fa-angle-right"></i></a> </div>
				</div>
			</div>
		</div>
	</section>
	<section class="image_with_content py-lg-5 py-md-3 py-2 bg_dark">
		<div class="container">
			<h1 class="text-left mb-lg-5 heading_light text-light text-capitalize">Maximize profits with leverage</h1>
			<p class="text-light">Improve your trading results by using leverage (margin). Leverage is a powerful tool that allows you to open a position much larger in value than the amount you deposited</p> <a href="#" class="btn bg_transperant mb-lg-4 mb-md-3 mb-2 text-capitalize text-light">Learn More <i class="fa-solid fa-angle-right"></i></a>
			<div class="row align-items-center">
				<div class="col-12 col-lg-6">
					<div class="row mb-lg-5">
						<div class="col">
							<h2 class="heading_light mb-lg-3 text-light">+0.64%</h2>
							<P class="text-capitalize text-light"><b>without leverage</b></P>
						</div>
						<div class="col">
							<h2 class="heading_light mb-lg-3 text-light">+12.8%</h2>
							<P class="text-capitalize text-light"><b>with 1:20 leverage</b></P>
						</div>
					</div>
					<div class="row mb-lg-3">
						<div class="col">
							<h2 class="heading_light mb-lg-3 text-light">+32%</h2>
							<P class="text-capitalize text-light"><b>with 1:50 leverage</b></P>
						</div>
						<div class="col">
							<h2 class="heading_light mb-lg-3 text-light">+0.64%</h2>
							<P class="text-capitalize text-light"><b>with 1:100 leverage</b></P>
						</div>
					</div>
					<button type="button" class="btn bg_skyblue m-2 btn-lg mb-lg-4 mb-md-3 mb-2 px-5 text-capitalize text-light">Get started</button>
					<p class="text-light">Margin trading involves risk. <a href="#">See Risk Disclosure</a></p>
				</div>
				<div class="col-12 col-lg-6 mb-md-4"> <img src="./images/trade.svg" class="d-block img-fluid shadow-sm" alt="..."> </div>
			</div>
		</div>
	</section>
	<section class="our_services py-lg-5 py-md-3 py-2">
		<div class="container">
			<h1 class="text-center mb-lg-5 heading_light text-capitalize">Open a free account and start trading in minutes!</h1>
			<div class="row align-items-center">
				<div class="col-12 col-lg-6"> <img src="./images/hero.png" class="d-block img-fluid shadow-sm" alt="..."> </div>
				<div class="col-12 col-lg-6">
					<ul class="list-style-none mb-lg-5">
						<li>
							<p><i class="fa-solid fa-check "></i><b> Best-in-class platform </b></p>
							<p> Become a better trader with advanced trading tools. Icoprimex provides an award-winning platform that is used by traders from around the world.</p>
						</li>
						<li>
							<p><i class="fa-solid fa-check "></i><b> Global markets</b></p>
							<p> Icoprimex allows its users to access multiple markets from a single account. Trade Cryptocurrencies, Forex, Commodities, and much more.</p>
						</li>
						<li>
							<p><i class="fa-solid fa-check "></i><b> 24/7 support</b></p>
							<p> Our customer service team works 24/7 to provide you with an exceptional level of support.</p>
						</li>
					</ul>
					<button type="button" class="btn bg_skyblue ms-4 mb-lg-4 mb-md-3 mb-2 px-4 text-capitalize">Open account</button>
					<p class="ps-4">Registration takes only 40 seconds!</p>
				</div>
			</div>
		</div>
	</section>
	<section class="blog_section py-lg-5 py-md-3 py-2 bg_dark">
		<div class="container">
			<h1 class="text-center mb-lg-5 heading_light text-light text-capitalize">Our Blog</h1>
			<div class="row mb-lg-4 mb-md-3 mb-2 justify-content-around">
				<div class="card"> <img src="./images/blog1.jpg" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title text-capitalize">Bitcoin Investment</h5>
						<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias non nulla placeat, odio, qui dicta alias.</p> <a href="#" class="btn bg_transperant text-capitalize">Read More <i class="fa-solid fa-angle-right"></i></a> </div>
				</div>
				<div class="card"> <img src="./images/blog2.jpg" class="card-img-top img-fluid" alt="...">
					<div class="card-body">
						<h5 class="card-title text-capitalize">Bitcoin Investment</h5>
						<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias non nulla placeat, odio, qui dicta alias.</p> <a href="#" class="btn bg_transperant text-capitalize">Read More <i class="fa-solid fa-angle-right"></i></a> </div>
				</div>
				<div class="card"> <img src="./images/blog3.jpg" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title text-capitalize">Bitcoin Exchange</h5>
						<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias non nulla placeat, odio, qui dicta alias.</p> <a href="#" class="btn bg_transperant text-capitalize">Read More <i class="fa-solid fa-angle-right"></i></a> </div>
				</div>
			</div>
		</div>
	</section>
	<section class="media_section py-lg-5 py-md-3 py-2">
		<div class="container position-relative">
			<h1 class="text-center mb-lg-5 heading_light text-capitalize"> JL Treding Point in the Media</h1>
			<div class="justify-content-around slick-carousel">
				<div class=" text-center shadow-sm p-4">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias non nulla placeat, odio, qui dicta alias.</p> <img src="./images/yahoo.png" class="media_image" alt="..."> </div>
				<div class=" text-center shadow-sm p-4">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias non nulla placeat, odio, qui dicta alias.</p> <img src="./images/ewn.png" class="media_image" alt="..."> </div>
				<div class=" text-center shadow-sm p-4">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias non nulla placeat, odio, qui dicta alias.</p> <img src="./images/coin_codex.png" class="media_image" alt="..."> </div>
				<div class=" text-center shadow-sm p-4">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias non nulla placeat, odio, qui dicta alias.</p> <img src="./images/bitcoin_exchange.png" class="media_image" alt="..."> </div>
				<div class=" text-center shadow-sm p-4">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias non nulla placeat, odio, qui dicta alias.</p> <img src="./images/business.png" class="media_image" alt="..."> </div>
				<div class=" text-center shadow-sm p-4">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias non nulla placeat, odio, qui dicta alias.</p> <img src="./images/amb_crypto.png" class="media_image" alt="..."> </div>
				<div class=" text-center shadow-sm p-4">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias non nulla placeat, odio, qui dicta alias.</p> <img src="./images/market_watch.png" class="media_image" alt="..."> </div>
			</div>
		</div>
	</section>
	<section class="cta_section py-lg-5 py-md-3 py-2 bg_dark">
		<div class="container text-center">
			<h1 class="text-center mb-lg-5 heading_light text-light text-capitalize"> Subscribe To Our Newsletter</h1>
			<p class="text-light mb-lg-4 mb-md-3 mb-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias non nulla placeat, odio, qui dicta alias.</p>
			<form action="">
				<!--Grid row-->
				<div class="row d-flex justify-content-center">
					<div class="col-md-6 col-lg-6 col-12">
						<!-- Email input -->
						<div class="form-outline form-white d-flex ">
							<input type="email" id="form5Example21" placeholder="Enter Your Email" class="form-control" />
							<!-- <label class="form-label" for="form5Example21">Email address</label> -->
							<button type="submit " class="btn btn-outline-light bg_skyblue_light px-4 text-capitalize mb-lg-4 mb-md-3 mb-2 text-light"> Subscribe </button>
						</div>
					</div>
				</div>
				<!--Grid row-->
			</form>
		</div>
	</section>
	<!-- Footer -->
	<section class="footer_section py-lg-5 py-md-3 py-2 bg-light">
		<div class="container">
			<div class="row justify-content-around align-items-top mb-lg-5">
				<div class="col-3 text-left pe-3">
					<a class="navbar-brand" href="#"><img src="./images/newlogo.png"></a>
					<p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias non nulla placeat, odio, qui dicta alias.</p>
				</div>
				<div class="col-2 text-left pe-3">
					<ul class="list-unstyled ">
						<li class="footer_li mb-lg-3"> <a href="#!" class=""><b>Product</b></a> </li>
						<li class="footer_li"> <a href="#!" class="">Icoprimex Platform</a> </li>
						<li class="footer_li"> <a href="#!" class="">Covesting Module</a> </li>
					</ul>
				</div>
				<div class="col-2 text-left pe-3">
					<ul class="list-unstyled">
						<li class="footer_li mb-lg-3"> <a href="#!" class=""><b>Markets</b></a> </li>
						<li class="footer_li"> <a href="#!" class="">Cryptocurrencies</a> </li>
					</ul>
				</div>
				<div class="col-2 text-left pe-3">
					<ul class="list-unstyled">
						<li class="footer_li mb-lg-3"> <a href="#!" class=""><b>Trading Tools</b></a> </li>
						<li class="footer_li"> <a href="#!" class="">Cryptocurrency Price Charts</a> </li>
						<li class="footer_li"> <a href="#!" class="">Commodity Price Charts</a> </li>
						<li class="footer_li"> <a href="#!" class="">Copy Trading4</a> </li>
					</ul>
				</div>
				<div class="col-3 text-left pe-3">
					<ul class="list-unstyled">
						<li class="footer_li mb-lg-3"> <a href="#!" class=""><b>Contact Us</b></a> </li>
					</ul>
					<ul class="d-flex share_icon">
						<li class=""><i class="fa-brands fa-angellist"></i></li>
						<li class=""><i class="fa-brands fa-twitter"></i></li>
						<li class=""><i class="fa-brands fa-facebook-f"></i></li>
						<li class=""><i class="fa-brands fa-telegram"></i></li>
						<li class=""><i class="fa-brands fa-youtube"></i></li>
					</ul>
					<ul class="share_icon d-flex align-items-center mb-0">
						<li class=""><i class="fa-solid fa-phone"></i></li>
						<p>9876543210</p>
					</ul>
					<ul class="share_icon d-flex align-items-center">
						<li class=""><i class="fa-sharp fa-solid fa-location-dot"></i></li>
						<p>Lorem ipsum dolor sit
							<br> amet, consectetur adipisicing elit. </p>
					</ul>
				</div>
			</div>
		</div>
	</section>

    
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
	<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	<script>
	$().ready(function() {
		$('.slick-carousel').slick({
			infinite: true,
			arrows: true,
			centerPadding: "0px",
			dots: true,
			slidesToShow: 3,
			nav: true
		});
	});
	</script>
</body>

<<<<<<< HEAD
</html>
>>>>>>> b4de8313eaf2641f86b8e671814b625408e38f4b
=======
</html>
>>>>>>> b4de8313eaf2641f86b8e671814b625408e38f4b
