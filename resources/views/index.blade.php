@extends('includes.layouts.main')
@section('main-container')

      <!-- start slider section -->
      <div id="top_section" class=" banner_main">
         <div class="container">
            <div class="row d_flex">
               <div class="col-md-6">
                  <div class="airmic">
                     <h1>The Air Mic </h1>
                     <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you
                     </p>
                     <a class="read_more" href="Javascript:void(0)">Book Now </a>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="mic_img">
                     <figure><img src="{{ asset('assets/images/right_side.png') }}" alt="#"/></figure>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end slider section -->
      <!-- services -->
      <div class="services">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage text_align_center">
                     <h2>Our Services</h2>
                     <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you</p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-4">
                  <div class="service_img text_align_center">
                     <i><img src="{{ asset('assets/images/service1.png')}}" alt="#"/></i>
                  </div>
                  <div class="service_text text_align_center">
                     <h3>Mic line</h3>
                     <p>There are many variations of passages mmajority have suffered alteration in some form, by injected humour, or</p>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="service_img text_align_center">
                     <i><img src="{{ asset('assets/images/service2.png')}}" alt="#"/></i>
                  </div>
                  <div class="service_text text_align_center">
                     <h3>Mic Stand</h3>
                     <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or  </p>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="service_img text_align_center">
                     <i><img src="{{ asset('assets/images/service3.png')}}" alt="#"/></i>
                  </div>
                  <div class="service_text text_align_center">
                     <h3>Head mic</h3>
                     <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end services -->
      <!-- about -->
      <div id="about" class="about">
         <div class="container-fluid">
            <div class="row d_flex">
               <div class="col-md-6">
                  <div class="titlepage text_align_left">
                     <h2>About Us</h2>
                     <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscureContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure</p>
                     <a class="read_more" href="about.blade.php">Read More</a>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="about_img">
                     <figure><img class="img_responsive" src="{{ asset('assets/images/about_img.jpg')}}" alt="#"/></figure>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end about -->
      <!-- our_mics -->
      <div class="our_mics">
         <div class="container">
            <div class="row">
               <div class="col-md-10 offset-md-1">
                  <div class="titlepage text_align_center">
                     <h2>Our Mics</h2>
                     <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you</p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-4 col-sm-6 margin_bottom40">
                  <div id="ho_show" class="mics">
                     <figure><img class="img_responsive" src="{{ asset('assets/images/mics_img1.jpg')}}" alt="#"/></figure>
                     <div class="mics_icon">
                        <a href="javascript:void(0)">
                        <i class="fa fa-search" aria-hidden="true"></i>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6 margin_bottom40">
                  <div id="ho_show" class="mics">
                     <figure><img class="img_responsive" src="{{ asset('assets/images/mics_img2.jpg')}}" alt="#"/></figure>
                     <div class="mics_icon">
                        <a href="javascript:void(0)">
                        <i class="fa fa-search" aria-hidden="true"></i>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6 margin_bottom40">
                  <div id="ho_show" class="mics">
                     <figure><img class="img_responsive" src="{{ asset('assets/images/mics_img3.jpg')}}" alt="#"/></figure>
                     <div class="mics_icon">
                        <a href="javascript:void(0)">
                        <i class="fa fa-search" aria-hidden="true"></i>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6 margin_bottom40">
                  <div id="ho_show" class="mics">
                     <figure><img class="img_responsive" src="{{ asset('assets/images/mics_img4.jpg')}}" alt="#"/></figure>
                     <div class="mics_icon">
                        <a href="javascript:void(0)">
                        <i class="fa fa-search" aria-hidden="true"></i>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6 margin_bottom40">
                  <div id="ho_show" class="mics">
                     <figure><img class="img_responsive" src="{{ asset('assets/images/mics_img5.jpg')}}" alt="#"/></figure>
                     <div class="mics_icon">
                        <a href="javascript:void(0)">
                        <i class="fa fa-search" aria-hidden="true"></i>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6 margin_bottom40">
                  <div id="ho_show" class="mics">
                     <figure><img class="img_responsive" src="{{ asset('assets/images/mics_img6.jpg')}}" alt="#"/></figure>
                     <div class="mics_icon">
                        <a href="javascript:void(0)">
                        <i class="fa fa-search" aria-hidden="true"></i>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end our_mics -->
      <!-- testimonial -->
      <div class="testimonial">
         <div class="container">
            <div class="row">
               <div class="col-md-8 offset-md-2">
                  <div class="titlepage text_align_center">
                     <h2>Our Client Says</h2>
                     <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from </p>
                  </div>
               </div>
            </div>
            <div class="row d_flex">
               <div class="col-md-10 offset-md-1">
                  <div id="testimo" class="carousel slide our_testimonial" data-ride="carousel">
                     <ol class="carousel-indicators">
                        <li data-target="#testimo" data-slide-to="0" class="active"></li>
                        <li data-target="#testimo" data-slide-to="1"></li>
                        <li data-target="#testimo" data-slide-to="2"></li>
                     </ol>
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <div class="container">
                              <div class="carousel-caption posi_in">
                                 <div class="testomoniam_text">
                                    <i class="text_align_left d-block"><img  src="{{ asset('assets/images/icon.png')}}" alt="#"/></i>
                                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure</p>
                                    <i class="text_align_right d-block"><img  src="{{ asset('assets/images/icon_right.png')}}" alt="#"/></i>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption posi_in">
                                 <div class="testomoniam_text">
                                    <i class="text_align_left d-block"><img  src="{{ asset('assets/images/icon.png')}}" alt="#"/></i>
                                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure</p>
                                    <i class="text_align_right d-block"><img  src="{{asset('assets/images/icon_right.png')}}" alt="#"/></i>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption posi_in">
                                 <div class="testomoniam_text">
                                    <i class="text_align_left d-block"><img  src="{{ asset('assets/images/icon.png')}}" alt="#"/></i>
                                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure</p>
                                    <i class="text_align_right d-block"><img  src="{{ asset('assets/images/icon_right.png')}}" alt="#"/></i>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <a class="carousel-control-prev" href="#testimo" role="button" data-slide="prev">
                     <i class="fa fa-angle-left" aria-hidden="true"></i>
                     <span class="sr-only">Previous</span>
                     </a>
                     <a class="carousel-control-next" href="#testimo" role="button" data-slide="next">
                     <i class="fa fa-angle-right" aria-hidden="true"></i>
                     <span class="sr-only">Next</span>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end testimonial -->
      <!-- contact section -->
      <div class="contact left_cross_right">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage text_align_left">
                     <h2>Request a call back.</h2>
                     <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or raThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or raThere are many variations of passages of Lorem      </p>
                  </div>
               </div>
               <div class="col-md-12">
                  <form id="request" class="main_form">
                     <div class="row">
                        <div class="col-md-12 ">
                           <input class="contactus" placeholder="You Name" type="type" name="Name"> 
                        </div>
                        <div class="col-md-6">
                           <input class="contactus" placeholder="Email" type="type" name="Email"> 
                        </div>
                        <div class="col-md-6">
                           <input class="contactus" placeholder="Phone Number" type="type" name="Phone Number">                          
                        </div>
                        <div class="col-md-12">
                           <textarea class="textarea" placeholder="Message" type="Message"></textarea>
                        </div>
                        <div class="col-md-12">
                           <button class="send_btn">Send</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <!-- end contact section -->
@endsection