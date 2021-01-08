@extends('layouts.app')
 @section('content')

 <section id="appointment" class="appointment section-bg">
      <div class="container">

        <div class="section-title">
          <h2>APPLY</h2>
        </div>

        <form action=" " method="post" role="form" class="php-email-form" >
          {{csrf_field()}}

        <!--1st row-->
          <div class="form-row">


            <div class="col-md-4 form-group">
             Name :<br>
              <input type="text" name="a_name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars"
                @if(Auth::check()) value="{{Auth::user()->name}}" @endif>

              <div class="validate"></div>
            </div>

            <div class="col-md-4 form-group">
              NID No :<br>
              <input type="text" class="form-control" name="a_nid" id="nidno">
              
            </div>


            <div class="col-md-4 form-group">
              Age :<br>
              <input type="text" class="form-control" name="a_age" id="ag">
          </div>



          </div> <!--end of 1st r-->



        <!--2nd row-->

         <div class="form-row">


         	 <div class="col-md-4 form-group">
            Gender :<br>
              <select name="a_gender" id="gen" class="form-control">
        
                <option value="Female">Female</option>
                <option value="Male">Male</option>
                

              </select>
        
            </div>


          	<div class="col-md-4 form-group">
          		Phone No :<br>
              <input type="tel" class="form-control" name="a_phone" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars"
              @if(Auth::check()) value="{{Auth::user()->phone}}" @endif>
              <div class="validate"></div>
            </div>


            <div class="col-md-4 form-group">
              Address :<br>
              <input type="text" class="form-control" name="a_addr" id="addr" @if(Auth::check()) value="{{Auth::user()->address}}" @endif>
            </div>


</div> <!--end of 2nd r-->



 <!--3rd row-->
           
           <div class="form-row">


           <div class="col-md-4 form-group">
              Do you have any caregiving experience? <br>
              <select name="a_expr" id="exp" class="form-control">

                <option value="YES">Yes</option>
                <option value="NO">No</option>

              </select>
              
            </div>



            <div class="col-md-4 form-group">
              Do you have any of the following certifications?<br>
              <select name="a_cert" id="cert" class="form-control">
                <option value="Certified Nursing Assistant">CNA- Certified Nursing Assistant</option>
                <option value="Home Health Aid">HHA-Home Health Aid</option>
                <option value="Registered Nurse">RN-Registered Nurse</option>
                <option value="None">None of above</option>
              </select>
              
            </div>


            <div class="col-md-4 form-group">

            Have you read our terms and policies?<br>

            <select name="a_tmp" id="tmp" class="form-control">
                
                <option value="Yes">Yes</option>
                <option value="No">No</option>
               
              </select>
             
            </div>



          </div><!--end of 3rd r-->


        <!--files-->
       <div class="form-row">

       <div class="form-group">
           Upload Your CV:	
           <input type="file" id="myfile" name="a_cv">
          </div>


        <div class="form-group">
           Upload Your Image:	
           <input type="file" id="myimg" name="a_img">
          </div>

          
          </div>  <!--filesup--->

        <!--submit-->

          <div class="text-center"><button type="submit">Submit Application</button></div>
        </form>

      </div>
    </section>


 @endsection