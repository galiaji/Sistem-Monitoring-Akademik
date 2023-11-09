<?php

namespace App\Http\Controllers;

use App\Http\Requests\IRSFormRequest;
use App\Models\IRS; // The model should be named "IRS", not "IRSData"
use Illuminate\Http\Request;

class IRSController extends Controller
{

    public function create()
    {
        $uniqueSemesters = IRS::distinct('semester')->pluck('semester')->toArray();
        return view('irs', compact('uniqueSemesters'));
    }

    public function store(IRSFormRequest $request)
    {
        $irsData = new IRS();
        $irsData->semester = $request->input('semester');
        $irsData->IP = $request->input('IP'); // Assuming 'IP' is the name of the field
        $irsData->SKS = $request->input('SKS'); // Assuming 'SKS' is the name of the field
        $irsData->save();

        return redirect()->back()->with('success', 'Data saved successfully!');
    }
}
