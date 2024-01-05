<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddClass extends Model
{
    protected $fillable = [
        'classCode',
        'instructorName',
        'Class',
        'Subject',
        'schedule',
        'no_student',
    ];

    use HasFactory;
}