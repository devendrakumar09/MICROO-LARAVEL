@extends('includes.layouts.main')
     
@section('main-container') 
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
                     <i><img src="{{asset('assets/images/service1.png')}}" alt="#"/></i>
                  </div>
                  <div class="service_text text_align_center">
                     <h3>Mic line</h3>
                     <p>There are many variations of passages mmajority have suffered alteration in some form, by injected humour, or</p>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="service_img text_align_center">
                     <i><img src="{{asset('assets/images/service2.png')}}" alt="#"/></i>
                  </div>
                  <div class="service_text text_align_center">
                     <h3>Mic Stand</h3>
                     <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or  </p>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="service_img text_align_center">
                     <i><img src="{{asset('assets/images/service3.png')}}" alt="#"/></i>
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
@endsection