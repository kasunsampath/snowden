<?php

use Illuminate\Http\Request;
use App\Artic;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('articles', 'ArticController@index');
Route::get('articles/{id}', 'ArticController@show');
Route::post('articles', 'ArticController@store');
Route::put('articles/{id}', 'ArticController@update');
Route::delete('articles/{id}', 'ArticController@delete');
?>
