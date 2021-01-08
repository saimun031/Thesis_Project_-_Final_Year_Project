@extends('layouts.app')
 @section('content')
 
<section id="featured-services" class="featured-services">
<div class="container">



        <div class="row" align="center">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-3">
            <div class="icon-box">
              <div class="icon"><i class="icofont-search-user"></i></div>
              <h4 class="title"><a href="">Home Care solutions</a></h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
              <br>

               <a href="{{ url('/form_recipient') }}" class="appointment-btn">Search Caregiver</a>
            </div>
          </div>
          <br> <br>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-3">
            <div class="icon-box">
              <div class="icon"><i class="icofont-briefcase-1"></i></div>
              <h4 class="title"><a href="">Caregiving as a job</a></h4>
              <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                <br>

                <a href="{{ url('/form_applicant') }}" class="appointment-btn">Apply for job</a>
                
            </div>

          </div>
            
        
        

        </div> <!--row end-->

      
      </div>   <!--container end-->


</section>


 @endsection