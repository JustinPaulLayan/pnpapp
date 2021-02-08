<?php

namespace App\Http\Controllers\Api;

use App\Models\CaseReport;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReportController extends Controller
{
    public function store(Request $request)
    {
        $report = CaseReport::create([
            'crime_id' => $request->input('crime_id'),
            // pag gipili niya nga crime type kay focus crime required sia mag input ug
            // focus crime type
            'focus_crime_type' => $request->input('focus_crime_type'),
            'complainant_id' => $request->input('complaint_id'),
            'reported_by' => $request->input('reported_by'), //<--String nani siya
            'prepared_id' => $request->input('prepared_id'),
            'case_status_id' => 0,
            'crime_date' => $request->input('crime_date'), //<--field nga akong gi dungag
            'event_detail' => $request->input('event_detail'),
            'action_taken' => $request->input('action_taken'),
            'summary' => $request->input('summary'),
            'address' => $request->input('address'),
            'long' => $request->input('long'),
            'lat' => $request->input('lat'),
            'is_witness' => $request->input('is_witness')
        ]);

        return response()->json($report);
    }
}
