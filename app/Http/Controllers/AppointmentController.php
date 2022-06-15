<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use Auth;
use DB;

class AppointmentController extends Controller
{

    //Patient

    public function createAppointment()

    {
        return view('patient.Appointment.add_appointment');
    }

    public function viewAppointment()

    {
        $appointments = Appointment::orderBy('id','DESC')->get();
        return view('patient.Appointment.view_appointments', compact('appointments'));
    }

    public function saveAppointment(Request $request)

    {
        $patient_id = Auth::user()->id ?? '1';
        $saveAppointment = Appointment::create([
            'patient_id' => $patient_id,
            'description' => $request->description,
        ]);
        
        if($saveAppointment){
            session()->flash('message', 'Appointment Added Successfully!');
            return redirect('view-appointments');
        }
    }

    public function deleteAppointment($id)

    {
        $deleteAppointment = Appointment::find($id)
                                            ->delete();
        return redirect()->back();
    }

    //Admin

    public function patientAppointments()

    {
        $patientAppointments = Appointment::orderBy('id','DESC')->get();
        return view('admin.Appointment.view_appointments', compact('patientAppointments'));
    }

    public function approveAppointment($id)

    {

        DB::update("update appointments SET status='1' where id = '$id'");
        return redirect()->back();
    }

    public function rejectAppointment($id)

    {
        DB::update("update appointments SET status='0' where id = '$id'");
        return redirect()->back();
    }

    public function admindeleteAppointment($id)

    {
        $admindeleteAppointment = Appointment::find($id)
                                            ->delete();
        return redirect()->back();
    }

    //Doctor

    public function doctorviewAppointments()

    {
        $doctorviewAppointments = Appointment::where('status', '1')->orderBy('id','DESC')->get();
        return view('doctor.Appointment.view_appointments', compact('doctorviewAppointments'));
    }

    public function createPrescription($id)

    {
        $createPrescription = Appointment::find($id);
        return view('doctor.Appointment.add_prescription', compact('createPrescription'));
    }

    public function savePrescription(Request $request, $id)

    {
        $savePrescription = Appointment::find($request->id);
        $savePrescription->prescription = $request->prescription;
        $savePrescription->update();

        if($savePrescription){
            session()->flash('message', 'Prescription Added Successfully!');
            return redirect('doctorview-appointments');
        }
    }

}


