<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        return view('roles.index',)->with('role', $roles);
    }

    public function createrole()
    {
        $premision = Permission::all();
        return view('roles.create', compact('premision'));
    }

    public function addrole(Request $request)
    {
  $request->validate([
    'name' => ['required', 'string', 'max:255', Rule::unique('roles', 'name')],
    'permission' => 'required|array',
]);

        $role = Role::create([
            'name' => $request->name,
        ]);


        $role->syncPermissions($request->permission);

        return redirect()->route('roles.index');
    }


    function edit($id)
    {
        $data = Role::where('id', $id)->first();
        $premision = Permission::all();
        $chekpr = $data->permissions->pluck('name')->toArray();


        return view('roles.edit', compact('data', 'premision', 'chekpr'));
    }

    function update(Request $res)
    {
        $id = $res->id;
        $role = Role::findOrFail($id);
        $role->update(['name' => $res->name]);
        $role->syncPermissions($res->permission);
        return redirect()->route('roles.index');
    }
    function delete($id)
    {
     $role = Role::findOrFail($id);
        $emp=Employ::where('role',$role->name)->first();
        if($emp){
                    return redirect()->back()->with(
            'error',
            'This role is assigned to employees and cannot be deleted.'
        );
        }
           $role->permissions()->detach();
    $role->delete();
        
        return redirect()->back();
    }
}
