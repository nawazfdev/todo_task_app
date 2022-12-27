<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\todolist500;
class todomodel extends Controller
{
    public function login(){

        return view('todolist500')->with('todo_arr',todolist500::all());
        
        
        
          } 
          public function new(){

         return view('new_list');
            
            
            
              } 
              public function store(Request $request){
 
               // return $request->input("name");
                //print($request);
                $todo = new todolist500();
                $todo->name=$request->input("name");
                $todo->save();
                return redirect('/');
                   
                     } 
                   


                    }

