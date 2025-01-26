<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\JudgeRequest;
use App\Services\JudgeService;
use App\Services\Api\AddressService;
use App\Services\Api\DivisionService;
use App\Services\EducationInfoService;
use App\Services\EducationLevelService;
use App\Services\EmergencyContactService;
use App\Services\ExperienceService; 
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class JudgeController extends Controller
{
    protected $educationService, $divisionService, $judgeService, $educationInfoService, $experienceService, $addressService, $emergencyContactService;

    public function __construct(EducationLevelService $educationService, DivisionService $divisionService, JudgeService $judgeService, EducationInfoService $educationInfoService, ExperienceService $experienceService, AddressService $addressService, EmergencyContactService $emergencyContactService)
    {
        $this->educationService             = $educationService;
        $this->divisionService              = $divisionService;
        $this->judgeService                 = $judgeService;
        $this->educationInfoService         = $educationInfoService;
        $this->experienceService            = $experienceService;
        $this->addressService               = $addressService;
        $this->emergencyContactService      = $emergencyContactService;
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            if (Gate::allows('dashboard.index')) {
                $data['judges'] = $this->judgeService->list()->paginate(15);
                return view('backend.judge.index', $data);
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
                $data['educationLevels'] = $this->educationService->list();
                $data['divisions'] = $this->divisionService->list();

                return view('backend.judge.form', $data);
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
    public function store(JudgeRequest $judgeRequest)
    {
        try {
            if (!Gate::allows('dashboard.index')) {
                return view('errors.403');
            }
            // Validate incoming requests
            $judgeData             = $judgeRequest->validated();

            // Insert data into related services
            $judge = $this->judgeService->create($judgeData + ['password' => Hash::make(12345678)]);
 
            return redirect()->route('admin.judge.edit', $judge->id)->with('success', 'Judge create successfully.');
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

            $data['educationLevels'] = $this->educationService->list();
            $data['divisions'] = $this->divisionService->list();
            $data['judge'] = $this->judgeService->find($id);


            return view('backend.judge.form', $data);

        } catch (\Throwable $e) {
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
    public function update(JudgeRequest $judgeRequest, string $id)
    {
        try {
            if (!Gate::allows('dashboard.index')) {
                return view('errors.403');
            }
            // Validate incoming requests
            $judgeData             = $judgeRequest->validated();

            // Insert data into related services
            $judge = $this->judgeService->update($id, $judgeData);

            // Log the change
            __activity('Create Court', $judge);

            return redirect()->route('admin.judge.edit', $judge->id)->with('success', 'Judge update successfully.');
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
    public function destroy(string $id)
    {
        //
    }
}
