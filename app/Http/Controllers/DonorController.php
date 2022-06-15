<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donor;
use Auth;
use DB;

class DonorController extends Controller
{

    public function viewMedicine()

    {
        $viewMedicines = Donor::orderBy('id','DESC')->get();
        return view('donor.Medicine.view_medicines', compact('viewMedicines'));
    }

    public function donorDashboard()

    {
        return view('donor.donor_layout');
    }

    public function addMedicine()

    {
        return view('donor.Medicine.add_medicine');
    }

    public function saveMedicine(Request $request)

    {
        $donor_id = Auth::user()->id ?? '1';
        $createMedicine = Donor::create([
            'donor_id' => $donor_id,
            'medicine_name' => $request->medicine_name,
            'quantity' => $request->quantity,
            'expiry_date' => $request->expiry_date,
            'medicine_description' => $request->medicine_description,
        ]);

        if($createMedicine){
            session()->flash('message', 'Medicine Added Successfully!');
            return redirect('view-medicines');
        }
    }

    public function deleteMedicine($id)

    {
        $deleteMedicine = Donor::find($id)
                                    ->delete();
        return redirect()->back();
    }

    public function adminviewMedicine()

    {
        $adminviewMedicines = Donor::orderBy('id','DESC')->get();
        return view('admin.Medicine.view_medicines', compact('adminviewMedicines'));
    }

    public function approveMedicine($id)

    {

        DB::update("update donors SET status='1' where id = '$id'");
        return redirect()->back();
    }

    public function rejectMedicine($id)

    {
        DB::update("update donors SET status='0' where id = '$id'");
        return redirect()->back();
    }
}
