<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'aadhar', 'email', 'phone', 'pan', 'regNo', 'address', 'course', 'duration', 'photo', 'sign',
    ];
}

