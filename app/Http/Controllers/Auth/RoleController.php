<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Auth\Module;
use App\Models\Auth\Permission;
use App\Models\Auth\Role;
use App\Models\Auth\RolePermission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            if (Gate::allows('role.index')) {
                $data['totalRoles'] = Role::count();
                $data['totalPermission'] = Permission::count();
                $data['modules'] = Module::select('id', 'unique_key', 'name')->get();

                foreach ($data['modules'] as $key => $value) {
                    $data['moduleName'] = $value->name;
                    $data['permission'] = $value->permissions;
                }
                return response()->json(['status' => 200, 'data' => $data]);
            } else {
                return  response()->json(['status' => 403, 'message' => 'Access Denied 403']);
            }
        } catch (\Throwable $e) {
            return $e->getMessage();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        if (Gate::allows('role.create')) {
            $data['modules'] = Module::all();
            $data['permissions'] = Permission::all();
            $data['totals'] = Permission::count();

            return response()->json(['status' => 200, 'data' => $data]);
        } else {
            if (Auth::check()) {
                // abort(403);
                return response()->json(['status' => 403, 'message' => 'Access Denied 403']);
            } else {
                return redirect('login');
            }
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $role = Role::create(['name' => $request->name, 'slug' => str_replace(' ', '_', $request->name), 'status' => 1]);
        foreach ($request->permissions as $permission) {
            RolePermission::create(['role_id' => $role->id, 'permission_id' => $permission]);
        }
        return redirect(route('role.index'))->with('success', 'Role created Successfully!!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Auth\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Auth\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        //
        if (Gate::allows('role.edit')) {
            $data['role'] = $role;
            $data['modules'] = Module::all();
            $data['permissions'] = Permission::all();
            return view('super_admin.roles.form', $data)->with('success', 'appointment created Successfully!!!');
        } else {
            if (Auth::check()) {
                abort(403);
            } else {
                return redirect('login');
            }
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Auth\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role, $id = null)
    {
        //
        $role::find($id)->update(['name' => $request->name, 'slug' => str_replace(' ', '_', $request->name), 'status' => 1]);
        RolePermission::where('role_id', $id)->delete();
        foreach ($request->permissions as $permission) {
            RolePermission::create(['role_id' => $id, 'permission_id' => $permission]);
        }
        return redirect(route('role.index'))->with('success', 'Role update Successfully!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Auth\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        //
    }
}
