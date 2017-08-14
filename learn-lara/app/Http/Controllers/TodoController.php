<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class TodoController extends Controller
{
    public function index()
    {
        return view('pages/todo');
    }

    public function show($id)
    {
        $nilai = "ini adalah link " . $id;

        // insert
         // DB::table('users')->insert([
          //['username' => 'Jebraw', 'password' => 'test-oyy2018']
        // ]);

        // update
        // DB::table('users')->where('username', 'Jebraw')->update([
           // 'username' => 'Moch. Jebraw'
        // ]);

        // delete
        DB::table('users')->where('id', '6')->delete();

        // get all data from Database
        $users = DB::table('users')->get();

        return view('pages/single', ['single' => $nilai], ['users' => $users]);
    }
}
