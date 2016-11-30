<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;

class UserController extends Controller
{
    public function createUser(Request $request)
    {
      $user = new User();
      $user->name = $request->name;
      $user->phone = $request->phone;
      $user->email = $request->email;
      $user->password = Hash::make($request->password);
      $user->save();

      return [
        'api_status' => 1,
        'api_message' => 'User Registered',
        'data' => [
          'id' => $user->id,
        ],
      ];
    }

    public function listUser()
    {
      $users = User::all();

      return [
        'api_status' => 1,
        'api_message' => 'OK',
        'data' => $users
      ];
    }

    public function updateUser(Request $request, $id)
    {
      $user = User::($id);
      $user->name = $request->name;
      $user->phone = $request->phone;
      $user->email = $request->email;
      $user->password = Hash::make($request->password);
      $user->save();

      return [
        'api_status' => 1,
        'api_message' => 'User Updated',
        'data' => [
          'id' => $user->id,
        ],
      ];
    }
}
