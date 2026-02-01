<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employ;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    
    function employes()
    {
        // if (auth::user()->ability('manage_blog')) {
        //     return abort(403);
        // }

        $emp['emp'] = Employ::where('user_id',Auth::id())->get();
        return view('employess.employes')->with($emp);
    }

    function product()
    {
        // $user = User::find(1);
        $user=Employ::find(3);
        // $user->syncRoles(['editor', 'manager']);
        // $user->attachRole('create_blog');
        $user->addRole('employe');
        // $user->removeRole('user');

        return view('products.product');
    }
    function create()
    {
        $data['data'] = Role::get();
        return view('employess.create')->with($data);
    }
    function addemp(Request $res)
    {
        $res->validate([
            'name' => 'required',
            'email' => 'required|email',
            'contect' => 'required',
            'password' => 'required',
        ]);


    Auth::user()->employs()->create([
        'name' => $res->name,
        'email' => $res->email,
        'contect' => $res->contect,
        'password' => bcrypt($res->password),
        'role' => implode(',', $res->role),
    ]);



        //    $emp->addRole($res->role);    

        return redirect('employes');
    }

    function edit($id)
    {
        $data = Employ::findOrFail($id);
        $roles = Role::all();
        $assignedRoles = explode(',', $data->role);

        return view('employess.edit', compact('data', 'roles', 'assignedRoles'));
    }

    function edit_success(Request $res)
    {
        $id = $res->id;
        $res->validate([
            'name' => 'required',
            'email' => 'required|email',
            'contect' => 'required',
            'role' => 'required',
        ]);
        $arr = array(
            'name' => $res->name,
            'email' => $res->email,
            'contect' => $res->contect,
            'role' => implode(',', $res->role),
        );
        Employ::where('id', $id)->update($arr);

        return redirect('employes');
    }
    function delete($id)
    {
        Employ::where('id', $id)->delete();
        return redirect('employes');
    }
}
