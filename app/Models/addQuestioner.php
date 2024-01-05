<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class addQuestioner extends Model
{
    protected $fillable = [
        'category',
        'questioners',
    ];

    public function questioners(){
        return $this->belongsTo(AddCategory::class);
    }
    use HasFactory;
}
