<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\Reservation;
use Illuminate\Http\Request;

class AddEventController extends Controller
{
    public function showAddEventForm()
    {
        $categ = category::all();
        // dd($categ);
        return view('addEvent', compact('categ'));
    }
    public function acceptEvents(){
        $reservations = Reservation::where('accepted', 0)->get();
        // dd($reservations);
        return view('acceptEvents', compact('reservations'));
    }
    public function manuelAccept(Reservation $r){
        // dd($r->accepted);
        $r->accepted = 1;
        $r->update();
        return redirect()->back()->with('success', 'Reservation accepted successfully.');
    }
}
