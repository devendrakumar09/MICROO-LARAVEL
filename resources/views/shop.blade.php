@extends('includes.layouts.main')
     
@section('main-container')   
  
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
                     <figure><img class="img_responsive" src="{{asset('assets/images/mics_img1.jpg')}}" alt="#"/></figure>
                     <div class="mics_icon">
                        <a href="javascript:void(0)">
                        <i class="fa fa-search" aria-hidden="true"></i>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6 margin_bottom40">
                  <div id="ho_show" class="mics">
                     <figure><img class="img_responsive" src="{{asset('assets/images/mics_img2.jpg')}}" alt="#"/></figure>
                     <div class="mics_icon">
                        <a href="javascript:void(0)">
                        <i class="fa fa-search" aria-hidden="true"></i>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6 margin_bottom40">
                  <div id="ho_show" class="mics">
                     <figure><img class="img_responsive" src="{{asset('assets/images/mics_img3.jpg')}}" alt="#"/></figure>
                     <div class="mics_icon">
                        <a href="javascript:void(0)">
                        <i class="fa fa-search" aria-hidden="true"></i>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6 margin_bottom40">
                  <div id="ho_show" class="mics">
                     <figure><img class="img_responsive" src="{{asset('assets/images/mics_img4.jpg')}}" alt="#"/></figure>
                     <div class="mics_icon">
                        <a href="javascript:void(0)">
                        <i class="fa fa-search" aria-hidden="true"></i>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6 margin_bottom40">
                  <div id="ho_show" class="mics">
                     <figure><img class="img_responsive" src="{{asset('assets/images/mics_img5.jpg')}}" alt="#"/></figure>
                     <div class="mics_icon">
                        <a href="javascript:void(0)">
                        <i class="fa fa-search" aria-hidden="true"></i>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6 margin_bottom40">
                  <div id="ho_show" class="mics">
                     <figure><img class="img_responsive" src="{{asset('assets/images/mics_img6.jpg')}}" alt="#"/></figure>
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
                                    <i class="text_align_left d-block"><img  src="{{asset('assets/images/icon.png')}}" alt="#"/></i>
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
                                    <i class="text_align_left d-block"><img  src="{{asset('assets/images/icon.png')}}" alt="#"/></i>
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
                                    <i class="text_align_left d-block"><img  src="{{asset('assets/images/icon.png')}}" alt="#"/></i>
                                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure</p>
                                    <i class="text_align_right d-block"><img  src="{{asset('assets/images/icon_right.png')}}" alt="#"/></i>
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
@endsection