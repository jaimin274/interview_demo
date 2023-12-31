<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Subject;

class Student extends Model
{
    use HasFactory, SoftDeletes;

    public function subject(){
        return $this->hasMany(Subject::class);
    }

}
