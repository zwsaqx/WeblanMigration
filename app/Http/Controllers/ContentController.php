<?php

namespace App\Http\Controllers;


class ContentController extends Controller
{
    public function getWiredLanBusContent()
    {
        return view('partials.WiredLanBus');
    }

    public function getWiredLanStarContent()
    {
        return view('partials.WiredLanStar');
    }
}
