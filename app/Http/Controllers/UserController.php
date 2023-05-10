<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Session;

class UserController extends Controller
{
    //
    public function login(Request $request)
    {
        $request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);
      $user = User::where('email','=',$request->email)->first();
      if($user)
      {
        if(hash::check($request->password, $user->password))
        {
            \Session::put('logId', $user);
             return redirect('dashboard');
        }
        else{
            return Back()->with('fail', 'Password not matches.');
        }
      }
      else{
        return Back()->with('fail', 'This email is not registered.');
      }
    }

    public function register(Request $request)
    {
        $request->validate([
            'name'=>'required|min:2',
            'email'=>'required|email|unique:users',
            'password'=>'required',

            'confirm'=>'required|same:password'
        ]);
        $result = User::create([
            'name'=>$request->name,
             'email'=>$request->email,
              'password'=>hash::make($request->password)
            ]);
        // $result = $user->save();
        if($result)
        {
            return Back()->with('success', 'You have registered successfuly.');

        }
        else{
            return Back()->with('fail','Something is wrong!!!');
        }

    }
    public function logout()
    {
        if(Session::has('logId')){
            Session::pull('logId');
            return redirect('login');
        }
    }
}
