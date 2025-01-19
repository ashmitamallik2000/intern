<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Register\RegisterStoreRequest;
use App\Http\Requests\Register\RegisterUpdateRequest;
use App\Models\Register;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $registers=Register::all();
        return view('register.index',compact('registers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('register.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RegisterStoreRequest $request)
    {
        $validated = $request->validated(); 

        User::create([
            'name'=>$request->fname,
            'email'=>$request->email,
            'password'=>Hash::make($validated['password']), 
        ]);
        return redirect()->route('register.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Register $register)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Register $register)
    {
        return view('register.edit', compact('register'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RegisterUpdateRequest $request, Register $register)
    {
        $register->update($request->validated());
        return redirect()->route('register.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Register $register)
    {
        $register->delete();
        return redirect()->route('register.index');
    }
}
