<?php

namespace App\Http\Controllers\Portal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        return view('portal.news');
    }

    public function detailNews($slug, $date)
    {
        return view('portal.news-single');
    }
}
