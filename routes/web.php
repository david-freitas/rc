<?php

use App\Models\Story;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/teste', function () {
    return view('teste');
});


Route::get('/stories', function () {
    $stories = Story::all();    
    return view('stories.index', ['stories' => $stories]);
});

Route::post('/stories', function () {
    $title = request()->input('title');
    $description = request()->input('description');
    Story::create(['title' => $title, 'description' => $description]);
});


Route::get('/stories/create', function () {    
    return view('stories.create');
});


Route::get('/stories/{story}', function ($story) {
    $story = Story::find($story);
    return view('stories.show', ['story' => $story]);
});


