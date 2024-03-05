<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddEventController extends Controller
{
    public function showAddEventForm()
    {
        return view('addEvent');
    }
}
