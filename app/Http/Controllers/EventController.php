<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController 
{
    public function index() {

        $events = Event::all();

        return view('index', ['events'=> $events]);    
    }

    public function eventCreate() {
        return view('/events/eventCreate');
    }

    public function events() {
        return view('/events/events');
    }

    public function accountCreate() {
        return view('/events/accountCreate');
    }

    public function enter() {
        return view('/events/enter');
    }
}
