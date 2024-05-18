<?php

namespace App\Http\Controllers;

use App\Models\StudentInformation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class ExportController extends Controller
{
    public function ExportStudentInformation() {
        $data = StudentInformation::all();

        $csvFileName = 'student_information.csv';
        $headers = array(
            "Content-type" => "text/csv",
            "Content-Disposition" => "attachment; filename=$csvFileName",
            "Pragma" => "no-cache",
            "Cache-Control" => "must-revalidate, post-check=0, pre-check=0",
            "Expires" => "0"
        );

        $callback = function() use ($data) {
            $file = fopen('php://output', 'w');

            // Add custom header to CSV
            fputcsv($file, Schema::getColumnListing('student_information'));

            // Add data to CSV
            foreach ($data as $item) {
                fputcsv($file, $item->toArray());
            }
            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }
}
