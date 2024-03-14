<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\events;
use App\Models\Reservation;
use Illuminate\Support\Facades\Auth;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function showHomePage()
    {
        $events = events::where('validated', 1)->get();
       return view('welcome', compact('events'));
    }

    public function index()
    {
        $events = events::where('validated', 1)->get();
       return view('myRes', compact('events'));
    }

    public function searchTitle(Request $request) {

        $search = $request->search;
        $events = events::where('title', $search )->get();
        return view('welcome', compact('events'));
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
        $user = Auth::user()->id;
        $data = $request->validate([
            'title'=> 'required',
            'description'=> 'required',
            'start_date'=> 'required|after:today',
            'end_date'=> 'required|after:start_date',
            'location'=> 'required',
            'number_places'=> 'required',
            'categories_id'=> 'required',
            'status'=> 'required',
        ]);
        // dd($data);
        $data['users_id']= $user;
        $events = events::create($data);
        return redirect('/');
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function accept(events $event)
    {
        // dd($event);
        $event->validated=true;

        $event->update();
        return redirect()->back()->with('success', 'Event accepted successfully.');
    }

    public function deny(events $event)
    {
        $event->delete();

        return redirect()->back()->with('success', 'Event denied successfully.');
    }
    
    public function reserve(events $event)
    {

        // dd($event);
        if($event->status=='auto'){
           $valid = 1; 

        }
        else{
            $valid = 0; 
        }
        if ($event->number_places > 0) {
            Reservation::create([
                'user_id' => auth()->id(),
                'Event_id'=> $event->id,
                'accepted'=>$valid,
            ]);
            if($valid==true){
                $event->decrement('number_places');

                return redirect()->route('ticket')->with('success', 'Ticket reserved successfully.');
            }
            
            
            return redirect()->back()->with('success', 'Please wait verification.');
        } else {
            return redirect()->back()->with('error', 'No available places left.');
        }
    }
}
