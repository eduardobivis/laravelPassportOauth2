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

use Illuminate\Http\Request;

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/redirect', function () {

    $query = http_build_query([
        'client_id' => 'PUT_YOUR_CLIENT_IP_HERE',
        'redirect_uri' => 'http://localhost:8001/callback',
        'response_type' => 'code',
        'scope' => ''
    ]);

    return redirect('http://localhost:8000/oauth/authorize?'.$query);

})->name('get.tokens');

Route::get('/callback', function (Request $request) {

    $http = new GuzzleHttp\Client;

    $response = $http->post('http://localhost:8000/oauth/token', [
        'form_params' => [
            'grant_type' => 'authorization_code',
            'client_id' => 'PUT_YOUR_CLIENT_IP_HERE',
            'client_secret' => 'PUT_YOUR_CLIENT_SECRET_HERE',
            'redirect_uri' => 'http://localhost:8001/callback',
            'code' => $request->code,
        ],
    ]);

    return json_decode((string) $response->getBody(), true);
});
