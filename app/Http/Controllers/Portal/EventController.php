<?php

namespace App\Http\Controllers\Portal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        return view('portal.event');
    }

    public function detailEvent($slug, $date)
    {
        return view('portal.event-single');
    }
}
