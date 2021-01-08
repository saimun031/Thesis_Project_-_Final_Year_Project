@extends('layouts.app')
 @section('content')
 
<section id="featured-services" class="featured-services">
<div class="container">



        <div class="row" align="center">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-3">
            <div class="icon-box">
              <div class="icon"><i class="icofont-search-user"></i></div>
              <h4 class="title"><a href="">Home Care solutions</a></h4>
              <p class="description">Click on the "Search Caregiver" to get started!</p>
              <br>

               <a href="{{ url('/form_recipient') }}" class="appointment-btn">Search Caregiver</a>
            </div>
          </div>
          

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-3">
            <div class="icon-box">
              <div class="icon"><i class="icofont-arrow-right"></i></div>
              <h4 class="title"><a href="">STEP 1</a></h4>
              <p class="description">Fill up the form providing care recipient's information and preferrences and click on Done.</p>
                
            </div>
          </div>



          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-3">
            <div class="icon-box">
              <div class="icon"><i class="icofont-arrow-right"></i></div>
              <h4 class="title"><a href="">STEP 2</a></h4>
              <p class="description">You will be provided list of caregivers according to your preference.<br>Check the list.</p>
                
            </div>
          </div>



         
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-3">
            <div class="icon-box">
              <div class="icon"><i class="icofont-user-alt-3"></i></div>
              <h4 class="title"><a href="">STEP 3</a></h4>
              <p class="description">Choose caregiver and click on the "Request" button to send request.You will get response from the caregiver </p>
                soon.
            </div>
          </div>








          




        
        

        </div> <!--row end-->

      
      </div>   <!--container end-->


</section>


 @endsection