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
        $events = $this->event->with('author')->where(fieldLanguage('has'), true)->orderBy('start_at', 'desc')->paginate(5);

        if ($request->ajax()) {
            return view('user.events.event-ajax', compact('events'));
        }

        return view('user.events.event', compact('events'));
    }

    public function show($slug)
    {
        $event = $this->event->with('author')->where(fieldLanguage('has'), true)->where(fieldLanguage('slug'), $slug)->first();
        if (!$event) {
            return redirect()->route('user.not-found');
        }

        $relatedEvents = $this->event->with('author')->where(fieldLanguage('has'), true)->where('id', '!=', $event->id)->inRandomOrder()->limit(2)->get();

        return view('user.events.event-detail', compact('event', 'relatedEvents'));
    }
}
