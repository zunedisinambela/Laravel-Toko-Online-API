<?php

namespace App\Http\Controllers\Api;

use Auth;
use Response;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\UsersResource;

class UsersController extends Controller
{
    public function index()
    {
        // Untuk memfilter data2 yg mau dikeluarkan rubah di usersresource
        $users = User::paginate(10);

        // return Response::json($users);
        return UsersResource::collection($users);
    }

    public function login(Request $request)
    {
        // return $request->all();

        if ( !Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return Response::json([
                'status' => [
                    'code' => 401,
                    'description' => 'Credential is Wrong'
                ]
            ],401);
        }

        $loginUser = Auth::user();

        return (new UsersResource($loginUser))->additional([
            'status' => [
                'code' => 202,
                'description' => 'OK'
            ]
            ])->response()->setStatusCode(202);
    }
}
