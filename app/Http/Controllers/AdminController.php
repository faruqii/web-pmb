<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProspectiveStudent;
use App\Models\Student;
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade\Pdf;

class AdminController extends Controller
{
    // Show a list of all prospective students
    public function index()
    {
        $students = Student::all();
        return view('admin.students.index', compact('students'));
    }

    // Show a specific prospective student's details
    public function show($id)
    {
        $student = Student::findOrFail($id);
        return view('admin.students.show', compact('student'));
    }

    // Update the registration status of a prospective student
    public function updateStatus(Request $request, $id)
    {
        $student = Student::findOrFail($id);
        $student->update($request->only(['registration_status'])); // Assuming 'registration_status' is a column in your table
        return back()->with('success', 'Student registration status updated.');
    }

    // Delete a prospective student's record
    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        // Optionally remove the document from storage
        if ($student->document_path) {
            Storage::delete($student->document_path);
        }
        $student->delete();
        return back()->with('success', 'Student record deleted.');
    }

    // Generate a PDF for a prospective student
    public function generatePDF($id)
    {
        $student = Student::findOrFail($id);
        $pdf = PDF::loadView('admin.students.pdf', compact('student'))->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf->download('Student Data.pdf');
    }
}
