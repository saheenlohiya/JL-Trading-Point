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
                           <div class="col-12 col-lg-6 text-left">
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
      <h1 class="text-center mb-lg-5 heading_light text-capitalize">Why Choose us?</h1>
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
         <div class="col-12 col-lg-6 mb-md-4"> <img src="./images/trade.svg" class="d-block img-fluid shadow-sm" alt="..."> </div>
      </div>
   </div>
</section>
<section class="our_services py-lg-5 py-md-4 py-4">
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
      <h1 class="text-center mb-lg-5 heading_light text-capitalize"> JL Treding Point in the Media</h1>
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