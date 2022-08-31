<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Personnel;
use App\Http\Resources\ApiPersonnelResource;
use App\Http\Requests\ApiPersonnelRequest;

class ApiPersonnelController extends Controller
{
    public function index()
    {
        return ApiPersonnelResource::collection(Personnel::all());
    }

    public function store(ApiPersonnelRequest $request)
    {
        dd('sads');
        $person = new Personnel();
        $image_path = $request->file('image') !== null ? $request->file('image')->store('storage/app/public', 'public'): " ";
        $person->fill($request->validated());
        $person->image_path = $image_path;
        $person->save();
        return $person;
    }

    public function show($id)
    {
        $person = Personnel::findOrFail($id);

        return $person;
    }
}