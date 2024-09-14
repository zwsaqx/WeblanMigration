<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Response;

class FileController extends Controller
{
    public function downloadJar()
    {
        $filePath = public_path('downloads/Network_Simulator_C.jar');
        return Response::download($filePath, 'Network_Simulator_C.jar');
    }
}
