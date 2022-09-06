@extends('frontend.layouts.master')
@section('head')
@endsection
@section('content')

<section class="contac_banner py-5">
	<div class="container pt-5">
		<div class="row align-items-center py-5">
			<h1 class="text-left text-light heading_light text-capitalize pt-5">Contact us</h1>
			<p class="text-light mb-lg-4 mb-md-3 mb-2">"Find the best way to get in touch according to your needs."</p>
		</div>
	</div>
</section>


<section class="contact_section py-lg-5 py-4">
<div class="container gx-0">
   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13007100.546578625!2d-104.65616396446383!3d37.2581063974412!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited%20States!5e0!3m2!1sen!2sin!4v1662379081649!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
   </div>
   <div class="container py-5">
      <div class="contact__wrapper shadow-lg mt-n9">
         <div class="row no-gutters">
               <div class="col-lg-5 contact-info__wrapper bg_sky_dark p-4 order-lg-2">
                  <h3 class="color--white mb-5 text-light">Contact</h3>
      
                  <ul class="contact-info__list list-style--none position-relative z-index-101">
                     <li class="mb-4 pl-4 text-light">
                           <a href="mailto:someone@example.com"><span class="position-absolute"><i class="fas fa-envelope text-light"></i></span> admin@gmail.com</a>
                     </li>
                     <li class="mb-4 pl-4 text-light">
                           <a href="tel:+1 35 71 123 456"><span class="position-absolute text-light"><i class="fas fa-phone"></i></span> +1 35 71 123 456</a>
                     </li>
                     <li class="mb-4 pl-4 text-light">
                           <a href="#"><span class="position-absolute text-light"><i class="fas fa-map-marker-alt"></i></span> E6K lorem ipsum
                           <br> 6000 Charleroi</a>
                     </li>
                  </ul>
               </div>
      
               <div class="col-lg-7 contact-form__wrapper p-4 order-lg-1">
                  <form action="#" class="contact-form form-validate" novalidate="novalidate">
                     <div class="row">
                           <div class="col-sm-6 mb-3">
                              <div class="form-group">
                                 <label class="required-field" for="firstName">First Name</label>
                                 <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Jean">
                              </div>
                           </div>
      
                           <div class="col-sm-6 mb-3">
                              <div class="form-group">
                                 <label for="lastName">Last Name</label>
                                 <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Dupont">
                              </div>
                           </div>
      
                           <div class="col-sm-6 mb-3">
                              <div class="form-group">
                                 <label class="required-field" for="email">Email</label>
                                 <input type="text" class="form-control" id="email" name="email" placeholder="jean@dupont.com">
                              </div>
                           </div>
      
                           <div class="col-sm-6 mb-3">
                              <div class="form-group">
                                 <label for="phone">Phone Number</label>
                                 <input type="tel" class="form-control" id="phone" name="phone" placeholder="+32 71 123 456">
                              </div>
                           </div>
      
                           <div class="col-sm-12 mb-3">
                              <div class="form-group">
                                 <label class="required-field" for="message">Massage</label>
                                 <textarea class="form-control" id="message" name="message" rows="4" placeholder="lorem ipsum…"></textarea>
                              </div>
                           </div>
      
                           <div class="col-sm-12 mb-3">
                              <button type="submit" name="submit" class="btn bg_skyblue">Submit</button>
                           </div>
      
                     </div>
                  </form>
               </div>
               <!-- End Contact Form Wrapper -->
         </div>
      </div>
   </div>
</section>

@endsection
@section('script')
@endsection