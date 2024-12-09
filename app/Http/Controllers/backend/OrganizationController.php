<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrganizationRequest;
use App\Services\OrganizationService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Log;

class OrganizationController extends Controller
{
    protected $organizationService;

    public function __construct(OrganizationService $organizationService)
    {
        $this->organizationService     = $organizationService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            if (Gate::allows('dashboard.index')) {
                $data['organizations'] = $this->organizationService->list()->paginate(15);
                return view('backend.organization.index', $data);
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
                $data['organizations'] = $this->organizationService->list()->paginate(15);
                return view('backend.organization.form', $data);
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
    public function store(OrganizationRequest $organizationRequest)
    {
        try {
            if (!Gate::allows('dashboard.index')) {
                return view('errors.403');
            }
            // Validate incoming requests
            $organizationData             = $organizationRequest->validated();

            // Insert data into related services
            $organizationData = $this->organizationService->create($organizationData);

            // Log the change
            __activity('Create Organization', $organizationData);

            return redirect()->route('admin.organization.index')->with('success', 'Organization create successfully.');
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
            
            $data['organizations'] = $this->organizationService->list()->paginate(15);
            $data['organization'] = $this->organizationService->find($id);

            return view('backend.organization.form', $data);
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
    public function update(OrganizationRequest $organizationRequest, $id)
    {
        try {
            if (!Gate::allows('dashboard.index')) {
                return view('errors.403');
            }
            // Validate incoming requests
            $organizationData             = $organizationRequest->validated();

            // Insert data into related services
            $organizationData = $this->organizationService->update($id, $organizationData);

            // Log the change
            __activity('Create Organization', $organizationData);

            return redirect()->route('admin.organization.index')->with('success', 'Organization update successfully.');
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
