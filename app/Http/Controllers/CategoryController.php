<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\events;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = events::where('validated', 0)->get();
        $users = User::all();
        $cat = category::all();
        // dd(User::all());
        
        // $user = User::with("roles")->first();
        // dd($user);

        // dd($cat);
        // dd($events);
        return view('dashboard', compact('cat', 'users', 'events'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $cat = category::create(['name'=>$request->input('name')]);
       return redirect()->route('dashboard')->with('success', 'Category created successfully');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, category $c)
    {
        $c->name = $request->input('modifiedCat');
        $c->update();
        return redirect()->route('dashboard')->with('success', 'Category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(category $c)
    {
        $c->delete();
        return redirect()->route('dashboard')->with('success', 'Category deleted successfully');
    }
}
