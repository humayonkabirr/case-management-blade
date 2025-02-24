<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\EducationInfoRequest;
use App\Models\EducationInfo;
use App\Services\EducationInfoService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Log;

class EducationInfoController extends Controller
{

    protected $educationInfoService;

    public function __construct(EducationInfoService $educationInfoService)
    {
        $this->educationInfoService         = $educationInfoService;
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EducationInfoRequest $educationInfoRequest)
    { 
        try {
            if (!Gate::allows('dashboard.index')) {
                return view('errors.403');
            }
            // Validate incoming requests
            $educationInfoData             = $educationInfoRequest->validated();

            // Insert data into related services
            $educationInfo = $this->educationInfoService->create($educationInfoData);

            return redirect()->back()->with('success', 'Education Info Store successfully.');

        } catch (\Throwable $e) {
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
    public function show(EducationInfo $educationInfo)
    { 
        return $educationInfo;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EducationInfo $educationInfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EducationInfoRequest $educationInfoRequest, $id)
    {
        try {
            if (!Gate::allows('dashboard.index')) {
                return view('errors.403');
            }
            // Validate incoming requests
            $educationInfoData             = $educationInfoRequest->validated();

            // update data into related services
            $educationInfo = $this->educationInfoService->find($id);
            
            $educationInfo->update($educationInfoData);

            return redirect()->back()->with('success', 'Education Info update Successfully.');
        } catch (\Throwable $e) {
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
    public function destroy(EducationInfo $educationInfo)
    {
        //
    }
}
