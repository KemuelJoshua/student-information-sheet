<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStudentInformationRequest;
use App\Models\Student;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentInformationRequest;
use App\Http\Requests\UpdateStudentRequest;
use App\Models\StudentInformation;
use App\Services\StudentInformationService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    protected $StudentInformationService;

    public function __construct(StudentInformationService $StudentInformationService)
    {
        $this->StudentInformationService = $StudentInformationService;   
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user_id = Auth::user()->id;


        if (request()->ajax()) {
            try {
                 // Fetch student information for the authenticated user
                 $studentInformation = StudentInformation::where('user_id', $user_id)->firstOrFail();
                return response(['data' => $studentInformation, 'status' => 'success'], 200);
            } catch (\Exception $e) {
                return response(['message' => $e->getMessage(), 'status' => 'getting failed'], 500);
            }
        }
        
        return view('student.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStudentInformationRequest $request)
    {
        DB::beginTransaction();
        try {
            $response = $this->StudentInformationService->addStudentInformation($request->validated());
            DB::commit();
            return response(['data' => $response, 'status' => 'success'], 200);
        } catch (\Exception $e) {
            return response(['message' => $e->getMessage(), 'status' => 'store failed'], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStudentInformationRequest $request, $id)
    {
        DB::beginTransaction();
        try {
            $response = $this->StudentInformationService->updateStudentInformation($request->validated(), $id);
            DB::commit();
            return response(['data' => $response, 'status' => 'success'], 200);
        } catch (\Exception $e) {
            return response(['message' => $e->getMessage(), 'status' => 'update failed'], 500);
        }
    }
}
