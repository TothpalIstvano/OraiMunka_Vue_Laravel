<?php

namespace App\Http\Controllers;

use App\User;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController{
    public function changePassword(Request $request){
       $validated = $request->validate([
           'password' => 'required|confirmed|min:6',
       ]);
       $user = auth()->user();
       $user->password = Hash::make($validated['password']);
       $user->save();
       return redirect("/profile");
    }
}
