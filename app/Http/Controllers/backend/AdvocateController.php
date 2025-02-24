<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdvocateRequest;
use App\Services\Api\AddressService;
use App\Services\Api\DivisionService;
use App\Services\EducationInfoService;
use App\Services\EducationLevelService;
use App\Services\EmergencyContactService;
use App\Services\ExperienceService;
use App\Services\AdvocateService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class AdvocateController extends Controller
{
    protected $educationService, $divisionService, $advocateService, $educationInfoService, $experienceService, $addressService, $emergencyContactService;

    public function __construct(EducationLevelService $educationService, DivisionService $divisionService, AdvocateService $advocateService, EducationInfoService $educationInfoService, ExperienceService $experienceService, AddressService $addressService, EmergencyContactService $emergencyContactService)
    {
        $this->educationService             = $educationService;
        $this->divisionService              = $divisionService;
        $this->advocateService              = $advocateService;
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
                $data['advocates'] = $this->advocateService->list()->paginate(15);
                return view('backend.advocate.index', $data);
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
                return view('backend.advocate.form', $data);
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
    public function store(AdvocateRequest $advocateRequest)
    {
        try {
            if (!Gate::allows('dashboard.index')) {
                return view('errors.403');
            }
            // Validate incoming requests
            $advocateData             = $advocateRequest->validated();

            // Insert data into related services
            $advocate = $this->advocateService->create($advocateData + ['type' =>2 ,'password' => Hash::make(12345678)]);
 
            return redirect()->route('admin.advocate.edit', $advocate->id)->with('success', 'Advocate create successfully.');
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
            $data['advocate'] = $this->advocateService->find($id);


            return view('backend.advocate.form', $data);

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
    public function update(AdvocateRequest $advocateRequest, $id)
    {
        try {
            if (!Gate::allows('dashboard.index')) {
                return view('errors.403');
            }
            // Validate incoming requests
            $advocateData             = $advocateRequest->validated();

            // Insert data into related services
            $advocate = $this->advocateService->update($id, $advocateData);

            // Log the change
            __activity('Create Court', $advocate);

            return redirect()->route('admin.advocate.edit', $advocate->id)->with('success', 'Advocate update successfully.');
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
