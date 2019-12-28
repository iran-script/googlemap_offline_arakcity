<?php

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

use App\Zone;
use App\Place;

Route::get('/cache', function () {
   Artisan::call('cache:clear');
   Artisan::call('config:clear');
   Artisan::call('config:cache');
   Artisan::call('view:cache');
});


Route::get('/', function () {
   $tiles = Place::get();
   return view('test');
});

Route::get('/getmap/{x}/{y}/{z}', function ($x, $y, $z) {
   //395208045
   $tiles = Place::where('X', $x)->where('Y', $y)->where('Zoom', $z)->where('Type', '253259331')->get();
   $tilesdata = Zone::where('id', $tiles[0]->id)->first();
   return response($tilesdata->Tile, 200)
      ->header('Content-Type', 'image/jpeg');
   //base64_encode(file_get_contents($tilesdata->Tile));
   return $image;
});
