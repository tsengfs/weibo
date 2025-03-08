<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class StaticPagesController extends Controller
{
    public function home()
    {
        return view('static_pages.home');
    }

    public function about()
    {
        return view('static_pages.about');
    }

    public function help()
    {
        return view('static_pages.help');
    }
}
