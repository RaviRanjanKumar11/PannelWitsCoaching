<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Institute; // Make sure you have this model if you're using it

class StudentController extends Controller
{
    public function showRegistrationForm()
    {
        return view('studentreg');
    }

    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'aadhar' => 'required|string|max:12',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:10',
            'pan' => 'required|string|max:10',
            'regNo' => 'required|string|max:10',
            'address' => 'required|string|max:500',
            'course' => 'required|string|max:255',
            'duration' => 'required|string|max:255',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'sign' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Store the validated data
        $student = new Student();
        $student->name = $request->name;
        $student->aadhar = $request->aadhar;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->pan = $request->pan;
        $student->regNo = $request->regNo;
        $student->address = $request->address;
        $student->course = $request->course;
        $student->duration = $request->duration;

        // Handle the photo upload
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('photos', 'public');
            $student->photo = $photoPath;
        }

        // Handle the sign upload
        if ($request->hasFile('sign')) {
            $signPath = $request->file('sign')->store('signs', 'public');
            $student->sign = $signPath;
        }

        $student->save();

        // Redirect with a success message
        return redirect()->route('student.register')->with('success', 'Registration Successful');
    }

    public function index()
    {
        $students = Student::paginate(3); // Fetch 3 students per page
        $institute = Institute::first(); // Fetch the first institute (or adjust as needed)

        return view('dashboard', compact('students', 'institute'));
    }
}   


