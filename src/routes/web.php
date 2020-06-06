<?php

use App\Services\Customer\GetMatchedCustomer;
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
    $matchedCustomer = (new GetMatchedCustomer())->get();

    // get data with duplicates and pass to view
    // $unmatchedCustomer =

    return view('home', compact('matchedCustomer'));
});

