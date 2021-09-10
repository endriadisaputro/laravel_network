<?php

namespace App\Http\Controllers;

use Dotenv\Exception\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UpdatePasswordController extends Controller
{
    public function edit()
    {
      return view('password.edit');
    }

    public function update(Request $request)
    {
      $request->validate([
        'current_password'=>'required',
        'password'=>'required|min:8|confirmed',
      ]);

      if(Hash::check($request->current_password, auth()->user()->password)){
        auth()->user()->update(['password'=>bcrypt($request->password)]);  
        return back()->with('success','Your Password has been updated');
      }
      throw ValidationException::withSuccess([
          'current_password'=>'Your password doesn not match with our rechord',
      ]);
    }
}
