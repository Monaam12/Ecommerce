<?php

namespace App\Http\Controllers\Admin;

use App\Role;
use App\Permission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;


class RoleController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:list-role');
        $this->middleware('can:create-role', ['only' => ['create', 'store']]);
        $this->middleware('can:edit-role', ['only' => ['edit', 'update']]);
        $this->middleware('can:delete-role', ['only' => ['destroy']]);
    }

    public function index()
    {
        $roles = Role::orderBy('id', 'ASC')->paginate(5);

        return view('admin.roles.index', compact('roles'));
    }


    public function create()
    {
        $permission = Permission::get();
        return view('admin.roles.create', compact('permission'));
    }


    public function store(Request $request, Role $role)
    {

        $this->validate($request, [
            'name' => 'required|unique:roles,name',
            'permission' => 'required',
        ]);

        $role = Role::create(['name' => $request->input('name')]);
        $role->permissions()->sync($request->permission);

        return redirect()->route('admin.roles.index')
            ->with('success', 'Role Created Successfully');
    }


    public function show($id)
    {

        $role = Role::findOrFail($id);

        $permissions = Permission::join(
            "permission_role",
            "permission_role.permission_id",
            "=",
            "permissions.id"
        )
            ->where("permission_role.role_id", $id)
            ->get();

        return view('admin.roles.show', compact('role', 'permissions'));
    }


    public function edit($id)
    {

        $role = Role::findOrFail($id);
        $permissions = Permission::get();
        $rolePermissions = DB::table("permission_role")
            ->where("permission_role.role_id", $id)
            ->pluck("permission_role.permission_id", "permission_role.permission_id")
            ->all();

        return view('admin.roles.edit', compact('role', 'permissions', 'rolePermissions'));
    }


    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'name' => 'required',
            'permission' => 'required',
        ]);


        $role = Role::findOrFail($id);
        $role->name = $request->input('name');
        $role->save();
        $role->permissions()->sync($request->permission);

        return redirect()->route('admin.roles.index')
            ->with('success', 'Role Updated Successfully');
    }


    public function destroy($id)
    {
        DB::table("roles")->where('id', $id)->delete();

        return redirect()->route('admin.roles.index')
            ->with('success', 'Role Deleted Successfully');
    }
}
