<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::latest()->get();

        return view('students.index', compact('students'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        // Validate student registration data
        // Validate student registration data
        $validated = $request->validate([
            'student_id' => 'required|string|max:50|unique:students,student_id',
            'first_name' => 'required|string|max:100',
            'middle_name' => 'nullable|string|max:100',
            'last_name' => 'required|string|max:100',
            'email' => 'required|email|max:255|unique:students,email',
            'mobile_number' => 'required|numeric',
            'date_of_birth' => 'required|date',
            'gender' => 'required|string',
            'program' => 'required|string',
            'year_level' => 'required|string',
            'address' => 'required|string',
// Upload and store the student's profile picture
            'profile_picture' => [
                'required',
                'image',
                'mimes:jpg,jpeg,png',
                'max:2048',
            ],
        ]);

        if ($request->hasFile('profile_picture')) {

            $file = $request->file('profile_picture');

            $filename = time() . '_' . $file->getClientOriginalName();

            $path = $file->storeAs(
                'profile_pictures',
                $filename,
                'public'
            );

            $validated['profile_picture'] = $path;
        }

        $student = Student::create($validated);

        return redirect()
            ->route('students.show', $student->id)
            ->with('success', 'Student registered successfully!');
    }

    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }

    public function destroy(Student $student)
    {
        // Delete student's profile picture
        if ($student->profile_picture) {
            Storage::disk('public')->delete(
                $student->profile_picture
            );
        }

        // Delete student record
        $student->delete();

        return redirect()
            ->route('students.index')
            ->with('success', 'Student removed successfully!');
    }
}
