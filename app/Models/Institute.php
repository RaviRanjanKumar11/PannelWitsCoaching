<?php
// app/Models/Institute.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Institute extends Model
{
    use HasFactory;

    protected $table = 'institutes';

    // Define the columns that can be mass assigned.
    protected $fillable = [
        'name',
        'address',
        'established_year',
        'total_students',
        'male_students',
        'female_students',
        'total_courses',
        'popular_courses'
    ];
}

