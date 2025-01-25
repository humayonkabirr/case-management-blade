<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\EmergencyContactRequest;
use App\Models\EmergencyContact;
use App\Services\EmergencyContactService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Log;

class EmergencyContactController extends Controller
{

    protected $emergencyContactService;

    public function __construct(EmergencyContactService $emergencyContactService)
    {
        $this->emergencyContactService         = $emergencyContactService;
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
    public function store(EmergencyContactRequest $emergencyContactRequest)
    {
        try {
            if (!Gate::allows('dashboard.index')) {
                return view('errors.403');
            }
            // Validate incoming requests
            $emergencyContactData             = $emergencyContactRequest->validated();

            // Insert data into related services
            $this->emergencyContactService->create($emergencyContactData);

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
    public function show(EmergencyContact $emergencyContact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EmergencyContact $emergencyContact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EmergencyContactRequest $emergencyContactRequest, $id)
    {
        try {
            if (!Gate::allows('dashboard.index')) {
                return view('errors.403');
            }
            // Validate incoming requests
            $emergencyContactData             = $emergencyContactRequest->validated();

            // update data into related services
            $this->emergencyContactService->update($id, $emergencyContactData); 

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
    public function destroy(EmergencyContact $emergencyContact)
    {
        //
    }
}
