<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Auth\Permission;
use App\Models\Auth\Role;
use App\Models\Auth\RolePermission;
use App\Models\Auth\UserRole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        try {
            $user_id = Auth::id(); 
            $data['permission'] = [];
            if ($role_id = UserRole::where('user_id', $user_id)->first()->role_id) {
                $permissions = RolePermission::where('role_id', $role_id)->get('permission_id');
                $role = Role::find($role_id);
                //  Gate::define($role->slug,function(){
                //     return true;
                // });

                foreach ($permissions as $key => $permission) {
                    $permission_data = Permission::find($permission->permission_id);
                    $data['permission'][] = $permission_data->slug;
                }
            }

                return response()->json(['status' => 200, 'data' => $data]);

        } catch (\Throwable $e) {
            return $e->getMessage();
        }
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Permission $permission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Permission $permission)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Permission $permission)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Permission $permission)
    {
        //
    }
}
