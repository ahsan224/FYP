<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $table = 'appointments';

    protected $fillable = [
        'patient_id',
        'doctor_id',
        'description',
        'prescription',
        'status',
    ];

    public function Patient (){
        return $this->belongsTo(User::class,'patient_id','id');
    }

    public function Doctor (){
        return $this->belongsTo(User::class,'patient_id','id');
    }
}
