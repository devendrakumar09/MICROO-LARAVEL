@extends('includes.layouts.main')
     
@section('main-container') 
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