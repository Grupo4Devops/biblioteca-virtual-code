<?php

namespace App\Http\Controllers;

use App\Models\Gender;
use Illuminate\Http\Request;

class GenderController extends Controller
{

    public function index()
    {
        return view('gender.index');
    }


    public function create()
    {
        return view('gender.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        Gender::create([
            'name' => $request->name
        ]);

        return redirect()->route('genders.index')->with('success', 'Gender created successfully.');
    }


    public function show()
    {
       
    }


    public function edit(Gender $gender)
    {

        $gender = Gender::where('id', '=', $gender->id)->first();

        return view('gender.edit', compact('gender'));
    }


    public function update(Request $request, Gender $gender)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $gender->name = $request->name;
        $gender->save();

        return redirect()->route('genders.index')->with('success', 'Gender updated successfully.');
    }


    public function destroy(Gender $gender)
    {
        $gender->delete();

        return redirect()->route('genders.index')->with('success', 'Gender deleted successfully.');
    }   
}
