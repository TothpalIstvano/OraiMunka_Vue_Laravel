<?php

use Illuminate\Support\Facades\Route;
use App\Models\todo;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/todoList',function(){
    $todos=todo::all();
    return view('todoList', ['todos' => $todos]);
});

Route::post('/addTodo',function(\Illuminate\Http\Request $request){
    $todo=new todo;
    $todo->task=$request->task;
    $todo->is_completed=$request->has('is_completed');
    $todo->save();
    return redirect('/todoList');
});

Route::post('/delete/Todo',function(\Illuminate\Http\Request $request){
    $todo=todo::find($request->id);
    if($todo){
        $todo->delete();
    }
    // return JSON so AJAX success handler is clearly triggered
    return redirect('/todoList');
});

Route::post('/update/Todo', function(\Illuminate\Http\Request $request){
    $todo = todo::find($request->id);
    if (!$todo) {
        return response()->json(['success' => false], 404);
    }
    $todo->task = $request->task;
    // when using AJAX send is_completed as 1/0 — treat accordingly
    $todo->is_completed = $request->has('is_completed') || $request->is_completed == 1;
    $todo->save();
    return response()->json(['success' => true, 'todo' => $todo]);
});