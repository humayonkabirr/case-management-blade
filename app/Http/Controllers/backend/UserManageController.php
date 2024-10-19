<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\EducationInfoRequest;
use App\Http\Requests\UserRequest;
use App\Services\EducationLevelService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Log;

class UserManageController extends Controller
{
    protected $educationService;

    public function __construct(EducationLevelService $educationService)
    {
        $this->educationService = $educationService;
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
                $data['educationLevels'] = $this->educationService->list()->paginate(15); 
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
    public function store(UserRequest $request, EducationInfoRequest $educationInfoRequest)
    {
        try {
            if (Gate::allows('dashboard.index')) {
                $validatedData = $request->validated();
                $educationInfoRequestData = $educationInfoRequest->validated();
                dd($educationInfoRequestData);
            }
            return view('errors.403');
        } catch (\Throwable $e) {
            $errorMessage = $e->getMessage(); // Define the error message variable
            Log::error($errorMessage);
            return view('errors.500', compact('errorMessage'));
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
