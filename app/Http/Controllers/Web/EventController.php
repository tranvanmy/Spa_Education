<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Event;

class EventController extends Controller
{
    protected $event;
    public function __construct(Event $event) {
        $this->event = $event;
    }
    public function index(Request $request)
    {
        $events = $this->event->where(fieldLanguage('has'), true)->paginate(5);
        // dd($events);
        if ($request->ajax()) {
            return view('user.events.event-ajax', compact('events'));
        }
        return view('user.events.event', compact('events'));
    }
}
