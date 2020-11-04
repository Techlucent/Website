@extends('frontView.master')

@section('title','Contact Us')

@section('content')

  <section class="section section-bg" id="call-to-action" style="background-image: url({{ asset('frontend') }}/images/banner-image-1-1920x500.jpg)">
      <div class="container">
          <div class="row">
              <div class="col-lg-10 offset-lg-1">
                  <div class="cta-content">
                      <br>
                      <br>
                      <h2>Feel free to <em>Contact Us</em></h2>
                      <p>Ut consectetur, metus sit amet aliquet placerat, enim est ultricies ligula</p>
                  </div>
              </div>
          </div>
      </div>
  </section>

  <!-- ***** Features Item Start ***** -->
  <section class="section" id="features">
      <div class="container">
          <div class="row text-center">
              <div class="col-lg-6 offset-lg-3">
                  <div class="section-heading">
                      <h2>contact <em> info</em></h2>
                      <img src="{{ asset('frontend') }}/images/line-dec.png" alt="waves">
                      
                  </div>
              </div>

              <div class="col-md-6">
                  <div class="icon">
                      <i class="fa fa-phone"></i>
                  </div>

                  <h5><a href="#">+91 6361814604</a></h5>

                  <br>
              </div>

              <div class="col-md-6">
                  <div class="icon">
                      <i class="fa fa-envelope"></i>
                  </div>

                  <h5><a href="#">TECHLUCENT.SOLUTIONS@GMAIL.COM</a></h5>

                  <br>
              </div>

              <!--div class="col-md-4">
                  <div class="icon">
                      <i class="fa fa-map-marker"></i>
                  </div>

                  <h5>212 Barrington Court New York</h5>

                  <br>
              </div-->
          </div>
      </div>
  </section>
  <!-- ***** Features Item End ***** -->

  @endsection
   

    
    