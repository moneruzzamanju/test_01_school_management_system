<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'last_name',
        'date_of_birth',
        'phone',
        'email',
        'gender',
        'address',
        'street_name',
        'police_station',
        'district',
        'admission_date',
        'photo',
        'guardian_id',
    ];


    public function guardian()
    {
       return $this->belongsTo(Guardian::class);
    }
}
