<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Models\Auth\Authentication;
use App\Models\Auth\Permission;
use App\Models\Auth\Role;
use App\Models\Auth\RolePermission;
use App\Models\Auth\UserRole;
use App\Models\BackEnd\Store;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthenticationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    { 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function login()
    {
        return view('backend.auth.login');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    { 
    }

    /**
     * Display the specified resource.
     */
    public function show($authentication)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($authentication)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    { 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($authentication)
    {
        //
    }
}
