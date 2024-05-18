<?php

namespace App\Http\Controllers;

use App\Models\StudentInformation;
use App\Http\Requests\StoreStudentInformationRequest;
use App\Http\Requests\UpdateStudentInformationRequest;
use App\Services\StudentInformationService;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class StudentInformationController extends Controller
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

        $studentInformations = StudentInformation::all();

        if (request()->ajax()) {
            return $this->datatable($studentInformations);
        }

        return view('admin.student_information.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.student_information.create');
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
    public function show(StudentInformation $studentInformation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $studentInformation = StudentInformation::findOrFail($id);

        if (request()->ajax()) {
            return response(['data' => $studentInformation, 'status' => 'success'], 200);
        }

        return view('admin.student_information.edit', compact('studentInformation', 'id'));
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

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {   
        DB::beginTransaction();
        try {
            $student_information = StudentInformation::findOrFail($id);

            $student_information->delete();

            DB::commit();

            return response(['data' => $student_information, 'status' => 'success'], 200);

        } catch (\Exception $e) {
            return response(['message' => $e->getMessage(), 'status' => 'delete failed'], 500);
        } 
    }

    public function datatable($query)
    {
        return DataTables::of($query)
        ->addIndexColumn()
        ->addColumn('fullname', function($row) {
            return $row->last_name. ', ' . $row->first_name . $row->middle_name;
        })
        ->addColumn('actions', function ($row) {
            return '<div class="d-flex">
            <button data-id="' . $row->id . '" class="btn btn-primary btn-sm ms-1 show-button text-light">Show</button>
            <button data-id="' . $row->id . '" class="btn btn-warning btn-sm ms-1 edit-button text-light">edit</button>
            <button data-id="' . $row->id . '" class="btn btn-danger btn-sm ms-1 text-white delete-button">Delete</button>
            </div>';
        })
        ->rawColumns(['fullname', 'actions'])
        ->make(true);
    }
}
