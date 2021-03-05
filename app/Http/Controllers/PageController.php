<?php

namespace App\Http\Controllers;
use App\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('guests.index');
    }
    public function details()
    {
        return view('guests.details');
    }
}
