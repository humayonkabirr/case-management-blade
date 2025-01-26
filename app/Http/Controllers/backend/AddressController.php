<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddressRequest;
use App\Models\Address;
use App\Services\AddressService;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Log;

class AddressController extends Controller
{
     protected $addressService;
 
     public function __construct(AddressService $addressService)
     {
         $this->addressService         = $addressService;
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
     public function store(AddressRequest $addressRequest)
     { 
         try {
             if (!Gate::allows('dashboard.index')) {
                 return view('errors.403');
             }
             // Validate incoming requests
             $addressData             = $addressRequest->validated();
             
             // Insert data into related services
             $address = $this->addressService->create($addressData);
 
             return redirect()->back()->with('success', 'Address Store successfully.');
 
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
     public function show(Address $address)
     {
         //
     }
 
     /**
      * Show the form for editing the specified resource.
      */
     public function edit(Address $address)
     {
         //
     }
 
     /**
      * Update the specified resource in storage.
      */
     public function update(AddressRequest $addressRequest, $id)
     {
         try {
             if (!Gate::allows('dashboard.index')) {
                 return view('errors.403');
             }
             // Validate incoming requests
             $addressData             = $addressRequest->validated();
             
             // Insert data into related services
             $address = $this->addressService->update($id, $addressData);
 
             return redirect()->back()->with('success', 'Address Store successfully.');
 
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
     public function destroy(Address $address)
     {
         //
     }
 }
