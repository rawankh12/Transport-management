<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SupervisorController extends Controller
{
    
    public function index()
    {
        $supervisors = User::all();
        return view('supervisor.index', compact('supervisors'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone_number' => 'required|integer|max:20',
            'address' => 'required|string|max:255',
            'age' => 'required|integer|min:18',
        ]);

        User::create($request->all());

        return redirect()->route('supervisor.index');
    }
}
