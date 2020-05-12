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

// Pengaturan Post man
// Bagian Header : key : accept & content-type value : application/json
// Bagian body : pilih raw dan json

Route::get('users', 'Api\UsersController@index');
Route::get('users/{iduser}', 'Api\UsersController@user');
Route::post('auth/login', 'Api\UsersController@login');
Route::post('auth/register', 'Api\UsersController@register');
Route::post('auth/update/{iduser}', 'Api\UsersController@update');
Route::get('logout/{iduser}', 'Api\UsersController@logout');
