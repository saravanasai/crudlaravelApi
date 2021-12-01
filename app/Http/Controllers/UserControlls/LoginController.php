<?php

namespace App\Http\Controllers\UserControlls;

use App\Http\Controllers\Controller;
use App\Http\Resources\SingleUserResource;
use App\Http\Resources\User\UserResource;
use App\Models\User\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    function  get_all_users()
    {
        return UserResource::collection(User::all());
    }

    function get_single_users($id)
    {

        return new UserResource(User::find($id));
    }

    function user_login(Request $request)
    {
         return new UserResource(User::findOrFail($request->username));
    }

}
