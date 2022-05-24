<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models;
use Illuminate\Support\Facades\Hash;
use Auth;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     * 4 continue
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {

        $user = Models\User::create([
            'name' => 'Khan Rayees',
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        Auth::login($user);
        return redirect('/');
    }

    
}
