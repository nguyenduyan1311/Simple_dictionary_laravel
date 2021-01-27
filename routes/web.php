<?php

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
Route::post('/simple_dictionary', function (Illuminate\Http\Request $request) {
    $arr = array(
        'one' => 'một',
        'two' => 'hai',
        'three' => 'ba'
    );
    foreach ($arr as $key => $value){
        if ($request->input('search') == $key){
            echo "Nghĩa của từ " . $request->input('search') . " là: " .$value;
        }
    }
});
Route::get('/simple_dictionary', function () {
   return view('dictionary');
});
