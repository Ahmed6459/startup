<?php


use App\Artical;
use App\Http\Controllers\ArticalsController;
use App\Http\Controllers\HomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource("Artical", "ArticalsController");

Auth::routes(["verify" => true]);

route::get("/", "HomeController@welcome");

Route::get('/home', 'HomeController@index')->name('home')->middleware("verified");
