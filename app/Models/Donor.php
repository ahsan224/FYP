<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donor extends Model
{
    use HasFactory;

    protected $table = 'donors';

    protected $fillable = [
        'donor_id',
        'medicine_name',
        'quantity',
        'expiry_date',
        'medicine_description',
        'status',
    ];
}
