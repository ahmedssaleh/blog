<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
USE Illuminate\Support\Facades\DB;


class TaskController extends Controller
{
    public function index(){
        $task = DB::table('tasks')->get();
    return view('tasks',compact('task'));


    }
    public function show($id){
        $task = DB::table('tasks')->find($id);
    return view('show',compact('task'));


    }
    public function store(Request $request){
        DB::table('tasks')->insert(['name'=> $_POST['name']]);
        return redirect()->back();

    }
}
