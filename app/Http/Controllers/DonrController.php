<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Donor;
use App\Models\Medicine_Donated;


class DonrController extends Controller
{
    
    public function donor_register(){


        return view('signup_donor');

    }
    public function donor_store(Request $request){


        dd($request->all());

        $store =new Donor();
       
        $store->name=$request->name;
        $store->email=$request->email;
        $store->password=Hash::make($request->password);
        
    
    
        $store->save();
    
        if($store->save() == true){
            return redirect('login_donor')->with('success', 'You Request To Admin Send Sucessfully');
          }else{
            return redirect('doonor_regis')->with('error','Try Again');
          }
    
    }
    public function login_doctor(){


        return view('DoctorDashbord.doctor_login');
    
    }

    public function dashbord_donor(){


        return view('donor_dashbord');
    }

    public function medcine_donte(){

        return view('donate_medicine');
    }

    public function store_medicine(Request $request){

        // dd($request->all());
        $add=new Medicine_Donated();
        // $add->donor_id=session()->get('loginId');
        $add->medicine_name=$request->medicine_name;
      
        $add->quantity=$request->quantity;  
        $add->adress=$request->adress;
        $add->expiray_date=$request->expiray_date;
        $add->save();

        return redirect('donate_medicine');


}
}