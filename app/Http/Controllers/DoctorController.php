<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class DoctorController extends Controller
{
    
     public function add_doctor(){



        return  view('doctor.add_doctor');
     }
     public function store(Request $request){

      // dd($request->all());
      $name = $request->input('name');
      $email = $request->input('email');
      $password = $request->input('password');
      $qualification = $request->input('qualification');
      $specialization = $request->input('specialization');
      $adress = $request->input('adress');
      $b_group= $request->input('b_group');

      
      
      
      $data=array('name'=>$name,"email"=>$email,"password"=>$password,"qualification"=>$qualification,"specialization"=>$specialization,"adress"=>$adress,"b_group"=>$b_group);
      DB::table('doctors')->insert($data);
      echo "Record inserted successfully.<br/>";
      echo '<a href = "/add_doctor">Click Here</a> to go back.';
      }
}
