@extends('layouts.app')
 @section('content')
<style>
  div.d {
  text-align: justify;
} 
.ht {
  font-weight: 400;
  margin: -20px -20px 20px -20px;
  padding: 20px 15px;
  font-size: 16px;
  font-weight: 600;
  color:#3fbbc0;
  background: #f8f8f8;
}
</style>
   <div class="section-title">
    <h2>Recommendation List</h2>
   </div>
  <p>Some criteria didn't match See the list below to choose most preferable one: </p> 
 
 <section id="pricing" class="pricing">
  <div class="container">
    <div class="row">
      @foreach($remap as $map)
      <div class="col-lg-3 col-md-6">
            <div class="box">
               <h5 class="ht">Caregiver Information</h5>
               <div class="d">
               <p><b>Name:</b> {{ $map->crg_name }}</p>
               <p><b>Age:</b> {{ $map->crg_age }}</p>
               <p><b>Gender:</b> {{ $map->crg_gender }}</p>
               <p><b>Certifications:</b><br> {{ $map->crg_certification }}</p>
               <p><b>Provided Care Type:</b> {{ $map->care_type_p}}</p>
               <p><b>Can Hundle recipient<br>with Physcial Disability:</b> {{ $map->e_ph_d }}</p>
               <p><b>Speciality field:</b> {{ $map->crg_speciality }}</p>
               <p><b>Experience:</b> {{ $map->crg_experience}}</p>
                </div>
               <div class="btn-wrap">
                <a href="" class="btn-buy">Request</a>
              </div>

            </div>
          </div>
        @endforeach
        </div> 

</div>
</section>
  

 @endsection