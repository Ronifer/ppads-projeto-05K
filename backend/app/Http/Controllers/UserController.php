<?php

namespace App\Http\Controllers;

use App\Http\Models\User;
use App\Http\Models\Promotions;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function showAllUsers()
    {
        return response()->json(User::all());
    }

    public function showOneUser($id)
    {
        return response()->json(User::with('role')->findOrFail($id));
    }

    public function inative($id, Request $request)
    {
        $user = User::findOrFail($id);
        $user->status = 0;
        $user->save();
        $promotionsUser = Promotions::where("created_by", "=", $user->id)->get()->toArray();
        foreach($promotionsUser as $prom) {
            app('App\Http\Controllers\PromotionsController')->changeStateByInative($prom['id']);
        }
        return response()->json($user, 200);
    }

    public function create(Request $request)
    {
        $user = new User;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = app('hash')->make($request->input('password'));
        $user->save();
        return response()->json($user);
    }

    public function update($id, Request $request)
    {
        $User = User::findOrFail($id);
        $User->update($request->all());

        return response()->json($User, 200);
    }

    public function delete($id)
    {
        User::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }

    public function authenticate(Request $request)
 
    {
  
        $this->validate($request, [
  
        'email' => 'required',
  
        'password' => 'required'
  
         ]);

         
  
        $user = User::where('email', $request->input('email'))->first();

  
        if(Hash::check($request->input('password'), $user->password)){
    
            //$apikey = base64_encode(str_random(40));
    
            //Users::where('email', $request->input('email'))->update(['api_key' => "$apikey"]);;
    
            return response()->json($user);
    
        }else{
    
            return response()->json(['status' => 'fail'],401);
    
        }
  
    }
}