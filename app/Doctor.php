<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
   protected $table = 'doctors';

    protected $fillable = [
        'name', 'date_of_birth', 'specialization','experience','age','phone','email','gender','about','address','image'
    ];
}
