<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddressRequest;
use App\Http\Requests\EducationInfoRequest;
use App\Http\Requests\EmergencyContactRequest;
use App\Http\Requests\ExperienceRequest;
use App\Http\Requests\UserRequest;
use App\Services\AddressService;
use App\Services\DivisionService;
use App\Services\EducationInfoService;
use App\Services\EducationLevelService;
use App\Services\emergencyContactService;
use App\Services\ExperienceService;
use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class UserManageController extends Controller
{
    protected $educationService, $divisionService, $userService, $educationInfoService, $experienceService, $addressService, $emergencyContactService;

    public function __construct(EducationLevelService $educationService, DivisionService $divisionService, UserService $userService, EducationInfoService $educationInfoService, ExperienceService $experienceService, AddressService $addressService, EmergencyContactService $emergencyContactService)
    {
        $this->educationService             = $educationService;
        $this->divisionService              = $divisionService;
        $this->userService                  = $userService;
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
                return view('backend.user-manage.index');
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
                return view('backend.user-manage.form', $data);
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
    public function store(UserRequest $userRequest, EducationInfoRequest $educationInfoRequest, ExperienceRequest $experienceRequest, EmergencyContactRequest $emergencyContactRequest, AddressRequest $addressRequest)
    {
        DB::beginTransaction(); // Start the transaction

        try {
            if (!Gate::allows('dashboard.index')) {
                return view('errors.403');
            }
            // Validate incoming requests
            $userData             = $userRequest->validated();
            $educationInfoData    = $educationInfoRequest->validated();
            $experienceData       = $experienceRequest->validated();
            $emergencyContactData = $emergencyContactRequest->validated();
            $addressData          = $addressRequest->validated(); 

            // Insert data into related services
            $user = $this->userService->create($userData + ['password' => Hash::make(12345678)]); // Assuming this returns the created user
            
            foreach ($educationInfoData as $key => $educationInfo) { 
                $this->educationInfoService->create($educationInfo[0] + ['user_id' => $user->id]);
            }
            
            foreach ($experienceData as $key => $experience) {
                $this->experienceService->create($experience[0] + ['user_id' => $user->id]);
            }
  
            $this->emergencyContactService->create($emergencyContactData + ['user_id' => $user->id]);
            $this->addressService->create($addressData + ['user_id' => $user->id]);

            DB::commit(); // Commit the transaction if everything succeeds
            return redirect()->route('admin.user.index')->with('success', 'User create successfully.');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
