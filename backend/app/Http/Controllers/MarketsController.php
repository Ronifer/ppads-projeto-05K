<?php

namespace App\Http\Controllers;

use App\Http\Models\Markets;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class MarketsController extends Controller
{

    public function showAllMarkets()
    {
        return response()->json(Markets::all());
    }

    // public function showOneUser($id)
    // {
    //     return response()->json(User::with('role')->findOrFail($id));
    // }

    // public function create(Request $request)
    // {
    //     $user = new User;
    //     $user->name = $request->input('name');
    //     $user->email = $request->input('email');
    //     $user->password = app('hash')->make($request->input('password'));
    //     $user->save();
    //     return response()->json($user);
    // }

    // public function update($id, Request $request)
    // {
    //     $User = User::findOrFail($id);
    //     $User->update($request->all());

    //     return response()->json($User, 200);
    // }

    // public function delete($id)
    // {
    //     User::findOrFail($id)->delete();
    //     return response('Deleted Successfully', 200);
    // }

    // public function authenticate(Request $request)
 
    // {
  
    //     $this->validate($request, [
  
    //     'email' => 'required',
  
    //     'password' => 'required'
  
    //      ]);

         
  
    //     $user = User::where('email', $request->input('email'))->first();

  
    //     if(Hash::check($request->input('password'), $user->password)){
    
    //         //$apikey = base64_encode(str_random(40));
    
    //         //Users::where('email', $request->input('email'))->update(['api_key' => "$apikey"]);;
    
    //         return response()->json($user);
    
    //     }else{
    
    //         return response()->json(['status' => 'fail'],401);
    
    //     }
  
    // }
}