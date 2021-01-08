<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use Session;
use App\Models\recipient;



class RecipientController extends Controller
{
    

  public function index()
    {
        
    }




   public function insertDB(Request $req)
    {
       
        //session_start();
       $user_id=Auth::user()->id;
  

       $recipient_name=$req->input('c_name');
       $age=$req->input('c_age');
       $gender=$req->input('c_gender');
       $c_type=$req->input('c_type');
       $pg_gender=$req->input('g_gender');
       $p_disabilitites=$req->input('ph_d');
       $n_conditions=$req->input('di');
       $smed_conditions=$req->input('c_m');
     


       $recipient_care=array('name'=>$recipient_name ,'age'=>$age,'gender'=>$gender,
        'care_type'=>$c_type , 'p_c_gender'=>$pg_gender,
        'physical_disabilities'=>$p_disabilitites , 'n_condition'=>$n_conditions,
        'special_condition'=>$smed_conditions,'user_id'=>$user_id);

        //DB::table('recipients')->insert($recipient_care);

        
        $rid=DB::table('recipients')->insertGetId($recipient_care);
        //dd($rid);
        
 
    //return redirect('/showq');

    return $this->match($rid);


  }


  public function match($id){

    $user_id=Auth::user()->id;
   
           $mapping=DB::table('caregivers AS cg')
            ->leftjoin('recipients as r', function($join) {
                $join->on('r.care_type', '=', 'cg.care_type_p')
                ->on('r.p_c_gender', '=', 'cg.crg_gender')
                ->on('r.physical_disabilities', '=', 'cg.e_ph_d')
                ->on('r.n_condition', '=', 'cg.crg_speciality');
            })
            ->where([ ['r.user_id',$user_id], ['r.recipient_id',$id] ])
            ->select('r.*','cg.*')
            ->get();
           
          
       
           //dd($mapping['caregiver_id']);

             



           if($mapping->isEmpty())
           {
              $remap=DB::table('caregivers AS cg')
                ->leftjoin('recipients as r', function($join) {
                  $join->on('r.care_type', '=', 'cg.care_type_p')
                   ->on('r.p_c_gender', '=', 'cg.crg_gender')
                   ->on( function($q){
                         $q->on('r.n_condition', '=', 'cg.crg_speciality')
                         ->oron('r.physical_disabilities', '=', 'cg.e_ph_d');
                              });
                         })
            
            ->where([ ['r.user_id',$user_id], ['r.recipient_id',$id] ])
            ->select('r.*','cg.*')
            ->get();
            return view('reshowq',compact('remap'));
           
           }

           else
    //dd($mapping);
   return view('showq',compact('mapping'));  
        








  }











}
