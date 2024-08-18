<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function getWiredLanBusContent()
    {
        return view('partials.WiredLanBus');
    }
}
