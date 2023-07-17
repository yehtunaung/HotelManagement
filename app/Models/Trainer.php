<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    protected $table='trainers';
    protected $fillable =[
        'name',
        'email',
        'phone',
        'education',
        'experience',
        'description',
        'trainer_photo'
    ];
    public function specialities()
    {
        return $this->belongsToMany(Speciality::class,'trainer_specialities');
    }
    use HasFactory;
}
