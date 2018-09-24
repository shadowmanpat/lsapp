<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bootstrap\LoadConfiguration;
use Illuminate\Http\Request;
use Monolog\Logger;

class PagesController extends Controller
{
    public function index(){
        $title = 'welcome to larave';
        return view('pages.index', compact('title'));
    }

    public function about()
    {

        return view('pages.about');
    }

    public function services(){

        return view('pages.services');
    }
}
