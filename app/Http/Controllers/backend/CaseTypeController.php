<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\CaseTypeRequest;
use App\Services\CaseTypeService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Log;

class CaseTypeController extends Controller
{
    protected $caseTypeService;

    public function __construct(CaseTypeService $caseTypeService)
    {
        $this->caseTypeService  = $caseTypeService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            if (Gate::allows('dashboard.index')) {
                $data['caseTypes'] = $this->caseTypeService->list()->paginate(15);
                return view('backend.case-type.index', $data);
            }
            return view('errors.403');
        } catch (\Throwable $e) {
            $errorMessage = $e->getMessage(); // Define the error message variable
            return view('errors.500', compact('errorMessage'));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        try {
            if (Gate::allows('dashboard.index')) {
                $data['caseTypes'] = $this->caseTypeService->list()->paginate(15);
                return view('backend.case-type.form', $data);
            }
            return view('errors.403');
        } catch (\Throwable $e) {
            $errorMessage = $e->getMessage(); // Define the error message variable
            return view('errors.500', compact('errorMessage'));
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CaseTypeRequest $caseTypeRequest)
    {
        try {
            if (!Gate::allows('dashboard.index')) {
                return view('errors.403');
            }
            // Validate incoming requests
            $caseTypeData             = $caseTypeRequest->validated();

            // Insert data into related services
            $caseTypeData = $this->caseTypeService->create($caseTypeData);

            // Log the change
            __activity('Create Case Type', $caseTypeData);

            return redirect()->route('admin.case-type.index')->with('success', 'Case Type create successfully.');
        } catch (\Throwable $e) {
            DB::rollBack(); // Rollback the transaction if any exception occurs
            Log::error('Error in store method', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
            ]);

            return view('errors.500', ['errorMessage' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        try {
            if (!Gate::allows('dashboard.index')) {
                return view('errors.403');
            }

            $data['caseTypes'] = $this->caseTypeService->list()->paginate(15);
            $data['caseType'] = $this->caseTypeService->find($id);

            return view('backend.case-type.form', $data);
        } catch (\Throwable $e) {
            DB::rollBack(); // Rollback the transaction if any exception occurs
            Log::error('Error in store method', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
            ]);

            return view('errors.500', ['errorMessage' => $e->getMessage()]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CaseTypeRequest $caseTypeRequest, $id)
    {
        try {
            if (!Gate::allows('dashboard.index')) {
                return view('errors.403');
            }
            // Validate incoming requests
            $caseTypeData             = $caseTypeRequest->validated();

            // Insert data into related services
            $caseTypeData = $this->caseTypeService->update($id, $caseTypeData);

            // Log the change
            __activity('Create Case Type', $caseTypeData);

            return redirect()->route('admin.case-type.index')->with('success', 'Case Type update successfully.');
        } catch (\Throwable $e) {
            DB::rollBack(); // Rollback the transaction if any exception occurs
            Log::error('Error in store method', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
            ]);

            return view('errors.500', ['errorMessage' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
