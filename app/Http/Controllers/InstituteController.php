<?php

// app/Http/Controllers/InstituteController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Institute;

class InstituteController extends Controller
{
    public function showDashboard()
    {
        $institute = Institute::first(); // Fetch the first row from the institutes table
        return view('dashboard', compact('institute'));
    }
}


