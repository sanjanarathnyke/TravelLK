<?php

use App\Http\Controllers\RegionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/kandy', function () {
    return view('kandy.kandy');
})->name('kandy');

Route::get('/down-south', function () {
    return view('down-south.down-south');
})->name('down-south');

Route::get('/nuwara-eliya', function () {
    return view('Nuwara-eliya.Nuwara-eliya');
})->name('nuwara-eliya');

Route::get('/ella', function () {
    return view('ella.ella');
})->name('ella');

Route::get('/sigiriya-dambulla', function () {
    return view('sigiriya.sigiriya');
})->name('sigiriya-dambulla'); 


Route::get('/arugam-bay-east-coast', function () {
    return view('Arugam Bay.Arugam Bay');
})->name('arugam-bay-east-coast');

Route::get('/anuradhapura', function () {
    return view('Anuradhapura.Anuradhapura');
})->name('anuradhapura');

Route::get('/trincomalee-nilaveli', function () {
    return view('Trincomalee.Trincomalee');
})->name('trincomalee-nilaveli');

Route::get('/colombo', function () {
    return view('Colombo.Colombo');
})->name('colombo');

Route::get('/jaffna', function () {
    return view('Jaffna.Jaffna');
})->name('jaffna');


Route::prefix('regions')->group(function () {
    Route::get('/', [RegionController::class, 'index'])->name('regions');
    Route::get('/sigiriya-dambulla', [RegionController::class, 'index'])->name('sigiriya-dambulla');
    Route::get('/anuradhapura', [RegionController::class, 'index'])->name('anuradhapura');
    Route::get('/trincomalee-nilaveli', [RegionController::class, 'index'])->name('trincomalee-nilaveli');
    Route::get('/arugam-bay-east-coast', [RegionController::class, 'index'])->name('arugam-bay-east-coast');
});

Route::get('/aboutus', function () {
    return view('about');
})->name('aboutus');

Route::get('/contactus', function () {
    return view('contactus');
})->name('contactus');
