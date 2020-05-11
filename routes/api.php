<?php

use Illuminate\Http\Request;

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

// Respon Pertama API
// Route::get('hallo', function () {
//     $biodata = [
//         'nama' => 'Arjun Sinambela',
//         'email' => 'arjun@gmail.com',
//         'jenis-kelamin' => 'Pria',
//         'sosialmedia' => [
//             [
//                 'facebook' => 'zunedisinambela',
//                 'instagram' => 'arjun_sinambela'
//             ]
//         ]
//     ];

//     return \Response::json($biodata);
// });



Route::get('users', 'Api\UsersController@index');
