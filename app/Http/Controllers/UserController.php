<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $users = User::all();

        return response()->json(['data' => $users], 200);
    }

    public function get(Request $request, $userId)
    {
        $user = User::where('id', $userId)->first();

        if (!$user) {
            return response()->json(['error' => 'User does not exist'], 404);
        }

        return response()->json(['data' => $user], 200);
    }

    public function register(Request $request)
    {
        $firstname = $request->get('firstname');
        $lastname = $request->get('lastname');
        $email = $request->get('email');
        $password = $request->get('password');

        $user = User::where('email', $email)->first();
        if ($user) {
            return response()->json(['error' => 'Account already exist'], 400);
        }

        $newUser = User::create([
            'firstname' => $firstname,
            'lastname' => $lastname,
            'email' => $email,
            'password'  => app('hash')->make($password)
        ]);

        return response()->json(['data' => $newUser], 200);
    }

    public function login(Request $request)
    {
        $email = $request->get('email');
        $password = $request->get('password');

        $user = User::where('email', $email)->first();
        if (!$user || ($user && !Hash::check($password, $user->password))) {
            return response()->json(['error' => 'Invalid Credentials'], 400);
        }

        $token = sha1($email . time());
        $user->token = $token;
        $user->save();

        $user->makeVisible(['token']);

        return response()->json(['data' => $token]);
    }

    public function logout(Request $request)
    {
        $auth = auth() == false;

        return response()->json(['data' => 'Successfully logged out'], 200);
    }
}
