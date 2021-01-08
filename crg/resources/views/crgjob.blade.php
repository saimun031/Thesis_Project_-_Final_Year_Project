@extends('layouts.app')
 @section('content')
 
<section id="featured-services" class="featured-services">
<div class="container">


          <div class="row" align="center">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-3">
            <div class="icon-box">
              <div class="icon"><i class="icofont-briefcase-1"></i></div>
              <h4 class="title"><a href="">Caregiving as a job</a></h4>
              <p class="description">If you are interested to join our team as a caregiver then click on the "Apply for job" to get started!</p>
                <br>

                <a href="{{ url('/form_applicant') }}" class="appointment-btn">Apply for job</a>
                
            </div>

          </div>



        
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-3">
            <div class="icon-box">
              <div class="icon"><i class="icofont-arrow-right"></i></div>
              <h4 class="title"><a href="">STEP 1</a></h4>
              <p class="description">Fill up the form providing valid and necessary informations.</p>
                
            </div>
          </div>


 

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-3">
            <div class="icon-box">
              <div class="icon"><i class="icofont-arrow-right"></i></div>
              <h4 class="title"><a href="">STEP 2</a></h4>
              <p class="description">Carefully consider our terms and policies and click on Done.</p>
                
            </div>
          </div>



      
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-3">
            <div class="icon-box">
              <div class="icon"><i class="icofont-prescription"></i></div>
              <h4 class="title"><a href="">STEP 3</a></h4>
              <p class="description">After the verification process you will be soon get notified about your application status.</p>
                
            </div>
          </div>



            
        
        

        </div> <!--row end-->

      
      </div>   <!--container end-->


</section>


 @endsection