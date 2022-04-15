<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreTaskRequest;
use App\Task ;
class TasksController extends Controller
{
    
public function index(){

   // $tasks = DB::table('tasks')->get();
$tasks = Task::all()-orderby('name','asc');
    return view('welcome',compact('tasks'));


}

//public function store(StoreTaskRequest $request){

public function store(request $request){

     $validatedData = $request->validate([
         'name' => 'required|max:255',
        
     ]);

     $task =new Task;
     $task->name=$request->name;
     $task->save();
     
     
        
        return redirect('/');


}
public function destory($id){
    task::find($id)->delete();
    return redirect('/');



}
}