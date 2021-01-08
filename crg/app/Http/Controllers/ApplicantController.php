<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class ApplicantController extends Controller
{
    
 public function index()
    {
        //
    }

 public function insertDB(Request $req)
    
    {  
       $applicant_name=$req->input('a_name');
       $a_Nid=$req->input('a_nid');
       $a_age=$req->input('a_age');
       $a_gender=$req->input('a_gender');
       $a_phone=$req->input('a_phone');
       $a_address=$req->input('a_addr');
       $a_experience=$req->input('a_expr');
       $a_certifications=$req->input('a_cert');
       $a_tmp=$req->input('a_tmp');
       $a_cv=$req->input('a_cv');
       $a_img=$req->input('a_img');

     

       

        $Applicant_management=array('name'=>$applicant_name ,'NID'=>$a_Nid ,'age'=>$a_age,'gender'=>$a_gender,'phone'=>$a_phone , 'address'=>$a_address  ,'experienced'=>$a_experience,'certification'=>$a_certifications, 'tmp'=>$a_tmp, 'Applicant_cv'=>$a_cv,'Applicant_img'=>$a_img);

         DB::table('applicants')->insert($Applicant_management);

        //dd($a_cv);
       
        //dd($Applicant_management['experienced']);




          return redirect('/wh');
  



    }



public function ushowme()
    {
      $applicants_details=DB::table('applicants')->first(); 

      $applicants_detailall=DB::table('applicants')->get(); 

      //dd($applicants_details);
      //dd($applicants_details->name);

      return view('carg',compact('applicants_details','applicants_detailall'));

     //DB::table('applicants')->get();

    }


public function ume()
    {
      //$applicants_detailall=DB::table('applicants')->get(); 

      //dd($applicants_details);
      //dd($applicants_details->name);

      //return view('tryquery',compact('applicants_detailall'));

     //DB::table('applicants')->get();

    }





}
