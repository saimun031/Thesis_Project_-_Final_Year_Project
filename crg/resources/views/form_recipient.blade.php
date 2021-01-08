@extends('layouts.app')
 @section('content')
 
<section id="appointment" class="appointment section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Search For Caregiver</h2>
        </div>

        <form action="" method="post" role="form" class="php-email-form" >
          {{csrf_field()}}

        <!--1st row-->
          <div class="form-row">


            <div class="col-md-4 form-group">
              Care Recipient's Name:<br>
              <input type="text" name="c_name" class="form-control" id="name" placeholder="" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <!--<div class="validate"></div>-->
            </div>


            <div class="col-md-4 form-group">
              Care Recipient's Age:<br>
              <input type="text" class="form-control" name="c_age" id="ag">
          </div>


           <div class="col-md-4 form-group">
            Care Recipient's Gender:<br>
              <select name="c_gender" id="gen" class="form-control">
        
                <option value="Female">Female</option>
                <option value="Male">Male</option>
                

              </select>
        
            </div>



          </div> <!--end of 1st r-->



      <!--2nd row-->

        <div class="form-row"> 

          <div class="col-md-4 form-group">
            You are looking for:<br>
              <select name="c_type" id="tp" class="form-control">
        
                <option value="Elder Care">Elder Care</option>
                <option value="Child Care">Child Care</option>
                

              </select>
        
            </div>

          <div class="col-md-4 form-group">
             Preferable Gender for Caregiver:<br>
              <select name="g_gender" id="gen" class="form-control">
        
                <option value="Female">Female</option>
                <option value="Male">Male</option>
                

              </select>
        
            </div>


        </div>  <!--end of 2nd r-->










        
      <!--3rd row-->
          
        <div class="form-row">


           <div class="col-md-4 form-group">
              Is there any kind of physical disabilites that care recipient have? <br>
              <select name="ph_d" id="ph" class="form-control">
                
                <option value="NO">No</option>
                <option value="YES">Yes</option>
                
             </select>
              
            </div>



            <div class="col-md-4 form-group">
              Do care recipient have any of the following conditions?<br>
              <select name="di" id="dis" class="form-control">
                <option value="None">None of above</option>
                <option value="Autism">Autism</option>
                <option value="Dementia">Dementia</option>
                <option value="Alzheimer's disease">Alzheimer's disease</option>
              </select>
              
            </div>


            <div class="col-md-4 form-group">

            Any major health concern of care recipient :<br><br>

            <input type="text" class="form-control" name="c_m" id="mc">

            
             
            </div>


         </div>  <!--end of 3rd r-->



     


        <!--files-->
       <!-- <div class="form-row">

       <div class="form-group">
           Upload Your CV:	
           <input type="file" id="myfile" name="myfile">
          </div>


        <div class="form-group">
           Upload Your Image:	
           <input type="file" id="myfile" name="myfile">
          </div>

          
          </div> 
         -->

        <!--submit-->

          <div class="text-center"><button type="submit">SUBMIT</button></div>
        </form>

      </div>
    </section>







 @endsection