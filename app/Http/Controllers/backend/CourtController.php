<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\CourtRequest;
use App\Services\Api\DivisionService;
use App\Services\CourtService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Log;

class CourtController extends Controller
{
    protected $courtService, $divisionService;

    public function __construct(CourtService $courtService, DivisionService $divisionService)
    {
        $this->courtService     = $courtService;
        $this->divisionService  = $divisionService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            if (Gate::allows('dashboard.index')) {
                $data['courtList'] = $this->courtService->list()->paginate(15);
                return view('backend.court.index', $data);
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
                $data['divisions'] = $this->divisionService->list();
                $data['courts'] = $this->courtService->list()->paginate(15);
                return view('backend.court.form', $data);
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
    public function store(CourtRequest $courtRequest)
    {
        try {
            if (!Gate::allows('dashboard.index')) {
                return view('errors.403');
            }
            // Validate incoming requests
            $courtData             = $courtRequest->validated();

            // Insert data into related services
            $courtData = $this->courtService->create($courtData);

            // Log the change
            __activity('Create Court', $courtData);

            return redirect()->route('admin.court.index')->with('success', 'Court create successfully.');
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
    public function show(string $id) {}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        try {
            if (!Gate::allows('dashboard.index')) {
                return view('errors.403');
            }
            $data['divisions'] = $this->divisionService->list();
            $data['courts'] = $this->courtService->list()->paginate(15);
            $data['court'] = $this->courtService->find($id);

            return view('backend.court.form', $data);
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
    public function update(CourtRequest $courtRequest, $id)
    {
        try {
            if (!Gate::allows('dashboard.index')) {
                return view('errors.403');
            }
            // Validate incoming requests
            $courtData             = $courtRequest->validated();

            // Insert data into related services
            $courtData = $this->courtService->update($id, $courtData);

            // Log the change
            __activity('Create Court', $courtData);

            return redirect()->route('admin.court.index')->with('success', 'Court update successfully.');
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
