<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personnel;

class PersonnelController extends Controller
{
    public function index()
    {
        $personnel = new Personnel();
        $personnel = $personnel->all();
        return view('index', compact('personnel'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email',
            'age' => 'required|int',
            'experience' => 'required',
            'aweragewage' => 'required|int',
        ]);

        $person = new Personnel();
        $image_path = $request->file('image') !== null ? $request->file('image')->store('storage/app/public', 'public'): " ";
        
        $person->fill($request->all());
        $person->image_path = $image_path;
        $person->save();
        return redirect()->route('personnel.index');
    }

    public function show($id)
    {
        $person = Personnel::findOrFail($id);

        return view('show', compact('person'));
    }
}
