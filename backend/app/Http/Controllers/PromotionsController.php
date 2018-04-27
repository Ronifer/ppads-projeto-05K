<?php

namespace App\Http\Controllers;

use App\Http\Models\User;
use App\Http\Models\Promotions;
use App\Http\Models\Products;
use App\Http\Models\Marketsz;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class PromotionsController extends Controller
{

    // public function showAllUsers()
    // {
    //     return response()->json(User::all());
    // }

    // public function showOneUser($id)
    // {
    //     return response()->json(User::with('role')->findOrFail($id));
    // }

    public function create(Request $request)
    {
        $product = new Products;
        $product->title = $request->input('title');
        $product->description = $request->input('descProd');
        $product->save();

        $promotion = new Promotions;
        $promotion->price = $request->input('price');
        $promotion->description = $request->input('descricaoOfer');
        $promotion->created_by = $request->input('user_id');
        $promotion->product_id = $product->id;
        $promotion->market_id = $request->input('market_id');
        $promotion->save();
        return response()->json($promotion);
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