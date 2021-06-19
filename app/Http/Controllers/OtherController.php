<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;
use App\Journal;
use App\Event;
use Carbon\Carbon;

class OtherController extends Controller
{
    function home(){
        $journal = Journal::orderBy('updated_at', 'desc')->limit(3)->get();
        $event = Event::all();
        // foreach($event as $i){
        //     dd(Carbon::parse($i->date)->format('F'));
        // }
        $data = [
            'journal' => $journal,
            'event' => $event
        ];
        return view('home.index', $data);
    }

    function gallery(){
        $photo = Photo::orderBy('id', 'desc')->paginate(15);
        $data = [
            'photo' => $photo
        ];
        return view('galerie.index', $data);
    }

    function administration(){
        return view('administration.index');
    }

    function about(){
        return view('about.index');
    }
}
