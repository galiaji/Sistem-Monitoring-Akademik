<?php

namespace App\Http\Controllers;

use App\Models\InternshipProgress;
use Illuminate\Http\Request;

class InternshipProgressController extends Controller
{
    public function create()
    {
        return view("internship");
    }

    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'semester' => 'required',
            'status' => 'required',
            'seminar_date' => 'required|date',
            'grade' => 'required|numeric|min:0|max:4.00',
            'pdf' => 'required|mimes:pdf|max:2048', // Assuming you store the PDF in the public folder
        ]);

        // Handle file upload
        $pdfPath = $request->file('pdf')->store('internship_pdfs', 'public');

        // Create a new InternshipProgress instance using mass assignment
        InternshipProgress::create([
            'semester' => $request->input('semester'),
            'status' => $request->input('status'),
            'seminar_date' => $request->input('seminar_date'),
            'grade' => $request->input('grade'),
            'pdf_path' => $pdfPath,
        ]);

        return redirect()->back()->with('success', 'Internship progress saved successfully!');
    }
}
