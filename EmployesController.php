<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employe;

class EmployesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // echo "index";
        $data = Employe::get();
        // return $data;

        return view('home',compact('data'));


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|email',
            'salary' => 'required|numeric',
            'dob' => 'required|string',
            'password' => 'required',


        ]);
        //$request = input fields data from the add data form page//
        Employe::create([
            'name' => $request->name,
            'email' => $request->email,
            'salary' => $request->salary,
            'dob' => $request->dob,
            'password' => $request->password,


        ]);

        return redirect()->route('employes.index')->with('status','emplye added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       $view = Employe::find($id);
       // return $view;
        return view('show',compact('view'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $employe = Employe::find($id);
        return view('edit',compact('employe'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

         $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|email',
            'salary' => 'required|numeric',
            'dob' => 'required|string',
            'password' => 'required',


        ]);
         
          Employe::where('id',$id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'salary' => $request->salary,
                'dob' => $request->dob,
                'password' => $request->password,
         ]);
        
    
        

        return redirect()->route('employes.index')->with('status','the employee is updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       $employe = Employe::find($id);
       $employe->delete();
       return redirect()->route('employes.index')->with('status','employee deleted successfully');
    }
}
