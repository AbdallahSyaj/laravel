<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computer;

class ComputerController extends Controller
{


    
    
    public function index()
    {
        
            return view('computer.index', [
                'computers' => Computer::all()]);
        
        
    }

   
    public function create()
    {
        return view('computer.create');
    }

    
    public function store(Request $request)
    {
        $computer = new Computer();
        $computer->name = $request->name;
        $computer->price = $request->price;
        $computer->model = $request->model;
        $computer->save();
        
        return redirect()->route('computer.index');
    }

    
    public function show($id)
    {
      
        $index = Computer::findOrFail($id);        
        
        
        if($index === false){
             abort(404);

        } return view('computer.show', ['computer' => $index]);


    }

    
    public function edit(string $id)
    {
        //
    }

   
    public function update(Request $request, string $id)
    {
        //
    }

    
    public function destroy(string $id)
    {
        //
    }
}
