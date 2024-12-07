<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Auth\Module;
use App\Models\Auth\Permission;
use App\Models\Auth\Role;
use App\Models\Auth\RolePermission;
use App\Services\RoleService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class RoleController extends Controller
{

    protected $roleService;

    public function __construct(RoleService $roleService)
    {
        $this->roleService = $roleService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        try {
            if (Gate::allows('role.index')) {
                $data['roles'] = $this->roleService->list()->paginate(15);
                return view('backend.roles.index', $data);
            } else {
                return view('errors.403');
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
            return view('admin.roles.form', $data);
        } else {
            abort(403);
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
        if (Gate::allows('role.create')) {
            $role = Role::create(['unique_key' => mt_rand(1000000000, 9999999999), 'name' => $request->name, 'slug' => str_replace(' ', '_', $request->name), 'status' => 1]);
            foreach ($request->permissions as $permission) {
                RolePermission::create(['unique_key' => mt_rand(1000000000, 9999999999), 'role_id' => $role->id, 'permission_id' => $permission]);
            }
            return redirect(route('admin.role.index'))->with('success', 'Role created Successfully!!!');
        } else {
            abort(403);
        }
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
            return view('backend.roles.form', $data);
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
    public function update(Request $request, Role $role)
    {
        //
        if (Gate::allows('role.edit')) { 
            $role->update(['unique_key' => mt_rand(1000000000, 9999999999), 'name' => $request->name, 'slug' => str_replace(' ', '_', $request->name), 'status' => 1]);
           
             RolePermission::where('role_id', $role->id)->delete();
             
            foreach ($request->permissions as $permission) {
                RolePermission::create(['unique_key' => mt_rand(1000000000, 9999999999), 'role_id' => $role->id, 'permission_id' => $permission]);
            }
            return redirect(route('admin.role.index'))->with('success', 'Role update Successfully!!!');
        } else {
            abort(403);
            return redirect('login');
        }
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
