<?php

namespace App\Http\Controllers;

use App\Models\todolist500;
use Illuminate\Http\Request;

class Todolist500Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(){

        return view('todolist500')->with('todo_arr',todolist500::all());
        
        
        
          }    
    public function new()
    {
        return view('new_list');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         // return $request->input("name");
                //print($request);
                $todo = new todolist500();
                $todo->name=$request->input("name");
                $todo->save();
                return redirect('/');
                   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\todolist500  $todolist500
     * @return \Illuminate\Http\Response
     */
    public function show(todolist500 $todolist500)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\todolist500  $todolist500
     * @return \Illuminate\Http\Response
     */
    public function edit(todolist500 $todolist500,$id)
    {
        $todo=todolist500::find($id);
        return view('edit_list')->with('todo_arr',$todo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\todolist500  $todolist500
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, todolist500 $todolist500)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\todolist500  $todolist500
     * @return \Illuminate\Http\Response
     */
    public function destroy(todolist500 $todolist500,$id)
    {
    
            $row= todolist500::find($id);
      $row->delete();

            return redirect('/');
               
                  

    }
}
