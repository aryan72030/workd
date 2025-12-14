<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class Ajaxcontoller extends Controller
{
    public function Index()
    {
        $data['list'] = DB::table('datain')->get();
        return view('welcome')->with($data);
    }

    public function ajax(Request $res)
    {
        $data = ['name'  => $res->name,'lname' => $res->lname,'email' => $res->email,'city'  => $res->city,'password'=>$res->password ];

     

        if ($res->id) {
            DB::table('datain')->where('id', $res->id)->update($data);
        } else {
            DB::table('datain')->insert($data);
        }

        $data['list'] = DB::table('datain')->get();
        return view('ajax')->with($data); 
    }

    public function delet(Request $res)
    {
        DB::table('datain')->where('id', $res->id)->delete();
        $data['list'] = DB::table('datain')->get();
        return view('ajax')->with($data);
    }

    public function update($id)
    {
         $user = DB::table('datain')->where('id', $id)->first();
          return response()->json($user);
    }    
}
