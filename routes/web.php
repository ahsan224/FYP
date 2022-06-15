<?php

use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfoUserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ResetController;
use App\Http\Controllers\SessionsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\DonrController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\DonorController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('about', function() {
	return view('front_side.about');
});
Route::get('departments', function() {
	return view('front_side.departments');
});Route::get('doctors', function() {
	return view('front_side.doctors');
});Route::get('contact', function() {
	return view('front_side.contact');
});

Route::get('/', function() {
	return view('front_side.index');
});

Route::group(['middleware' => ['auth','isAdmin']] , function() {

Route::get('admin-dashboard', function() {
	return view('admin.admin_layout');
});

Route::get('patient-appointments', [AppointmentController::class, 'patientAppointments']);
Route::get('approve-appointment/{id}', [AppointmentController::class, 'approveAppointment']);
Route::get('reject-appointment/{id}', [AppointmentController::class, 'rejectAppointment']);
Route::get('admindelete_appointment/{id}', [AppointmentController::class, 'admindeleteAppointment']);
Route::get('adminview_medicines', [DonorController::class, 'adminviewMedicine']);
Route::get('approve-medicine/{id}', [DonorController::class, 'approveMedicine']);
Route::get('reject-medicine/{id}', [DonorController::class, 'rejectMedicine']);




Route::get('create-doctor', function() {
	return view('admin.doctor.add_doctor');
});

});

Route::get('doctor-dashboard', function() {
	return view('doctor.doctor_layout');
});

Route::get('doctorview-appointments', [AppointmentController::class, 'doctorviewAppointments']);
Route::get('create_prescription/{id}', [AppointmentController::class, 'createPrescription']);
Route::post('save_prescription/{id}', [AppointmentController::class, 'savePrescription']);
Route::get('doctordelete_appointment/{id}', [AppointmentController::class, 'doctordeleteAppointment']);


Route::get('patient-dashboard', function() {
	return view('patient.patient_layout');
});

Route::get('view-appointments', [AppointmentController::class, 'viewAppointment']);
Route::get('create-appointment', [AppointmentController::class, 'createAppointment']);
Route::post('save-appointment', [AppointmentController::class, 'saveAppointment']);
Route::get('delete_appointment/{id}', [AppointmentController::class, 'deleteAppointment']);


//Donor

Route::get('donor-dashboard', [DonorController::class, 'donorDashboard']);
Route::get('view-medicines', [DonorController::class, 'viewMedicine']);
Route::get('add-medicine', [DonorController::class, 'addMedicine']);
Route::post('save-medicine', [DonorController::class, 'saveMedicine']);
Route::get('delete-medicine/{id}', [DonorController::class, 'deleteMedicine']);





Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
