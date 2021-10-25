<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function addproduct(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phonenumber = $request->phonenumber;

        if ($user->save()) {
            $response = ["status" => 200, "message" => "inserted successfully"];
            return json_encode($response);
        }
    }
}
