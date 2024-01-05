<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class addStudent extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'idNumber',
        'password',
         'classCode',

    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
