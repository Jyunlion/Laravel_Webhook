<?php

use Illuminate\Support\Facades\Route;
use GuzzleHttp\Client;  //此套件目的是用來執行HTTP REQUEST的套件

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

Route::get('/server_to_client', function () {
    $client = new Client();
    $res = $client->get('http://localhost:8001/api/client/Hello-Client');
    return ($res->getBody());
});