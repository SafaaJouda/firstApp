<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\todos;
use App\Todo;

class firstController extends Controller
{
    public function index()
    {
        $todos=\App\Todo::all();
        return view('todos.firstapp',compact('todos'));

    }
    public function show(Todo $todo){
        return view ('todos.show')->with('todo' ,$todo);




    }
    public function  create(){
        return view ('todos.create');
    }
    public function  store(Request $request){
     //  return $request->all();
     //   return $request->input('todoTitle');

        $request->validate(['todoTitle' =>'required|min:6',
            'todoDesc' =>'required' ]);

        $todo = new Todo();
        $todo->title = $request->todoTitle;
        $todo->description= $request->todoDesc;

        $todo->save();
        $request->session()->flash('success','Todo created successfully');
        return redirect('/test');

    }
    public function edit(Todo $todo){
        return view('todos.edit') -> with('todo',$todo);
    }

   public function update(Request $request, Todo $todo){
       $request->validate(['todoTitle' =>'required|min:6',
           'todoDesc' =>'required' ]);

        $todo->title = $request->get(('todoTitle'));
        $todo->description=$request->get('todoDesc');
       $todo->save();
       $request->session()->flash('success','Todo updated successfully');
       return redirect('/test');


    }

    public function destroy(Todo $todo){

        $todo->delete();
        session()->flash('success','Todo deleted successfully');
        return redirect('/test');
    }

    public function complete(Todo $todo){
        $todo->completed = true;
        $todo->save();
        session()->flash('success','Todo completed successfully');
        return redirect('/test');
    }
}
