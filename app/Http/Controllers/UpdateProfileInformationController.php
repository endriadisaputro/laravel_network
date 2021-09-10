<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UpdateProfileInformationController extends Controller
{
    public function edit()
    {
      return view('users.edit');
    }

    public function update(Request $request)
    {
      $request->validate([
          'name'=>['string','min:3','max:191','required'],
          'username'=>['alpha_num','min:3','max:25','required','unique:users,username,'.auth()->id()],
          'email'=>['email:dns','required','unique:users,email,'. auth()->id()],
      ]);

      Auth::user()->update([
          'name'=>$request->name,
          'username'=>$request->username,
          'email'=>$request->email,
      ]);

      return redirect()
                ->route('profile',auth()->user()->username)
                ->with('success','Your profile has been updated!');
    }
}
