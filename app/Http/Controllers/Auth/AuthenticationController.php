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
        try {
            if (Auth::check()) {
                $user =Auth::user();
                $data['id']                 = $user->id;
                $data['store_id']           = $user->store_id;
                $data['name']               = $user->name;
                $data['phone']              = $user->phone;
                $data['type']               = $user->type;
                $data['email']              = $user->email;
                $data['profile_photo_url']  = $user->profile_photo_url;
                $data['store']              = $user->getStore->name;

                return response()->json(['status' => 201, 'message' => 'Success', 'data' => $data]);
            } else {
                return response()->json(['status' => 401, 'message' => 'Unauthorized 401', 'data' => false]);
            }
        } catch (\Exception $e) {

            return $e->getMessage();
        }
    }

    /**
     * Display a listing of the resource.
     */
    public function authCheck()
    {
        //
        if (Auth::check()) {
            $user_id = Auth::id();
            if ($role_id = UserRole::where('user_id', $user_id)->first()->role_id) {
                $permissions = RolePermission::where('role_id', $role_id)->get('permission_id');
                $role = Role::find($role_id);
                //  Gate::define($role->slug,function(){
                //     return true;
                // });

                $vuePermission = [];
                foreach ($permissions as $key => $permission) {
                    $permission_data = Permission::find($permission->permission_id);

                    Gate::define($permission_data->slug, function () {
                        return true;
                    });

                    $vuePermission[$key] = $permission_data->slug;
                }
            }

            return response()->json($vuePermission);
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
    public function store(UserRequest $request)
    {
        $user = new User();

        $user->unique_key   = mt_rand(1000000000, 9999999999);
        $user->name         = $request->name;
        $user->email        = $request->emailOrPhone;
        $user->type         = 'Admin';
        $user->password     = Hash::make($request->password);
        $user->save();

        $UserRole = new UserRole();

        $UserRole->unique_key  = mt_rand(1000000000, 9999999999);
        $UserRole->user_id = $user->id;
        $UserRole->role_id = 3;
        $UserRole->save();

        return response()->json($user);
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
    public function update(UserUpdateRequest $request)
    {
        try {
            if (Gate::allows('users.edit')) {

                $user = User::find(1);
                $user->update($request->all());
                return response()->json(['status' => 201, 'message' => 'Your Information Updated', 'data' => $user]);
            } else {
                return response()->json(['status' => 403, 'message' => 'Access Denied 403']);

            }
        } catch (\Exception $e) {
            return response()->json(['status' => 500, 'message' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($authentication)
    {
        //
    }
}
