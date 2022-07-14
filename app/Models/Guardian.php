<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guardian extends Model
{
    use HasFactory;

    protected $fillable = [
        'father_name',
        'father_phone_no',
        'father_occupation',
        'father_photo',

        'mother_name',
        'mother_phone_no',
        'mother_occupation',
        'mother_photo',

        'office_phone',
        'email',
        'status',
    ];
    public function students()
    {
       return $this->hasMany(Student::class);
    }
}
