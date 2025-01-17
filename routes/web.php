<?php

use App\Http\Controllers\QuizController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

use App\Http\Controllers\ContentController;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\WirelesslanController;

Auth::routes(
    [
        'verify' => true
    ]
);

Route::get('/', function () {
    //Views are pages that users can visit
    return view('LandingPage'); // this is the name of the view file in folder views

})->name("LandingPage");

Route::get('/Home', function () {
    return view("Home");

})->middleware('emailauth');


Route::get('/wireless-access-point-model', [WirelesslanController::class, 'showAccessPointModel'])
    ->name('wireless.access.point.model');

Route::post('/generate-model', [WirelesslanController::class, 'generateModel'])
    ->name('generate.model');

Route::get('/wireless-ad-hoc-model', [WirelesslanController::class, 'showAdHocModel'])->
    name('wireless.ad.hoc.model');

// datalink


Route::get("/DataLink/DataLinkModelling", function () {
    return view("DataLink.DataLinkModelling");
})->name('dataModelling');


////////////////////////////////////
//WiredLan related pages
Route::get("/WiredLan", function () {
    return view("WiredLan.WiredLan");
});

Route::get("WiredLan/WiredLanTutorial", function () {
    return view("WiredLan.WiredLanTutorial");
});
Route::get("WiredLan/WiredLanQuiz", function () {
    return view("WiredLan.WiredLanQuiz");
});

Route::match(['get', 'post'], '/WiredLan/WiredLanModelling');


Route::get('WiredLan/WiredLanModelling/Bus', function () {
    return view('partials.WiredLanBus');
});


Route::get('/get-bus-content', [ContentController::class, 'getWiredLanBusContent']);

Route::get('/get-star-content', [ContentController::class, 'getWiredLanStarContent']);



Route::get("WiredLan/WiredLanModelling", function () {
    return view("WiredLan.WiredLanModelling");
});
Route::get("WiredLan/WiredLanScenarios", function () {
    return view("WiredLan.WiredLanScenarios");
});
Route::get("WiredLan/WiredLanKeyTerms", function () {
    return view("WiredLan.WiredLanKeyTerms");
});

Route::get("WiredLan/WiredLanReview", function () {
    return view("WiredLan.WiredLanReview");
});




////////////////////////////////////
//Wireless Lan related pages

Route::get("/WirelessLan", function () {
    return view("WirelessLan.WirelessLan");
});
Route::get("/WirelessLan/WirelessLanTutorial", function () {
    return view("WirelessLan.WirelessLanTutorial");
});
Route::get("/WirelessLan/WirelessLanQuiz", function () {
    return view("WirelessLan.WirelessLanQuiz");
});

Route::get("/WirelessLan/WirelessLanModelling", function () {
    return view("WirelessLan.WirelessLanModelling");
});
Route::get("/WirelessLan/WirelessLanScenarios", function () {
    return view("WirelessLan.WirelessLanScenarios");
});
Route::get("/WirelessLan/WirelessLanKeyTerms", function () {
    return view("WirelessLan.WirelessLanKeyTerms");
});
Route::get("/WirelessLan/WirelessLanReview", function () {
    return view("WirelessLan.WirelessLanReview");
});

////////////////////////////////////
// TCP/IP related pages

Route::get("/TCPIP", function () {
    return view("TCPIP.TCPIP");
});
Route::get("/TCPIP/TCPIPTutorial", function () {
    return view("TCPIP.TCPIPTutorial");
});
Route::get("/TCPIP/TCPIPQuiz", function () {
    return view("TCPIP.TCPIPQuiz");
});
Route::get("/TCPIP/TCPIPModelling", function () {
    return view("TCPIP.TCPIPModelling");
});
Route::get("/TCPIP/TCPIPScenarios", function () {
    return view("TCPIP.TCPIPScenarios");
});
Route::get("/TCPIP/TCPIPKeyTerms", function () {
    return view("TCPIP.TCPIPKeyTerms");
});
Route::get("/TCPIP/TCPIPReview", function () {
    return view("TCPIP.TCPIPReview");
});

Route::get('/downloads/Network_Simulator_C.jar', [FileController::class, 'downloadJar'])->name('downloadJar');


////////////////////////////////////
// Bluetooth related pages
Route::get("/Bluetooth", function () {
    return view("Bluetooth.Bluetooth");
});
Route::get("/Bluetooth/BluetoothTutorial", function () {
    return view("Bluetooth.BluetoothTutorial");
});
Route::get("/Bluetooth/BluetoothQuiz", function () {
    return view("Bluetooth.BluetoothQuiz");
});
Route::get("/Bluetooth/BluetoothModelling", function () {
    return view("Bluetooth.BluetoothModelling");
});
Route::get("/Bluetooth/BluetoothScenarios", function () {
    return view("Bluetooth.BluetoothScenarios");
});
Route::get("/Bluetooth/BluetoothKeyTerms", function () {
    return view("Bluetooth.BluetoothKeyTerms");
});
Route::get("/Bluetooth/BluetoothReview", function () {
    return view("Bluetooth.BluetoothReview");
});

////////////////////////////////////
// Data Link Protocol related pages
Route::get("/DataLink", function () {
    return view("DataLink.DataLink");
});

Route::get("/DataLink/DataLinkTutorial", function () {
    return view("DataLink.DataLinkTutorial");
});
Route::get("/DataLink/DataLinkQuiz", function () {
    return view("DataLink.DataLinkQuiz");
});
Route::get("/DataLink/DataLinkModelling", function () {
    return view("DataLink.DataLinkModelling");
});
Route::get("/DataLink/DataLinkModelling2", function () {
    return view("DataLink.DataLinkModelling2");
});
Route::get("/DataLink/DataLinkScenarios", function () {
    return view("DataLink.DataLinkScenarios");
});
Route::get("/DataLink/DataLinkKeyTerms", function () {
    return view("DataLink.DataLinkKeyTerms");
});
Route::get("/DataLink/DataLinkReview", function () {
    return view("DataLink.DataLinkReview");
});




//Other pages
Route::get("/Feedback", function () {
    return view("Feedback");
});
Route::get("/UsefulLinks", function () {
    return view("UsefulLinks");
});

//Showing Quizzes

Route::get('/Bluetooth/BluetoothQuiz', [QuizController::class, 'showBluetoothQuiz']);
Route::get('/WirelessLan/WirelessLanQuiz', [QuizController::class, 'showWirelessLanQuiz']);
Route::get('/WiredLan/WiredLanQuiz', [QuizController::class, 'showWiredLanQuiz']);
Route::get('/TCPIP/TCPIPQuiz', [QuizController::class, 'showTCPIPQuiz']);
Route::get('/DataLink/DataLinkQuiz', [QuizController::class, 'showDataLinkQuiz']);

Route::post('/SubmitQuiz', [QuizController::class, "SubmitQuiz"]);


Route::post('/register', [UserController::class, 'register']);
Route::post('/logout', [UserController::class, 'logout']);
Route::post('/login', [UserController::class, 'login']);

?>