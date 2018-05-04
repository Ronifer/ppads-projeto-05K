<?php

namespace App\Http\Controllers;

use App\Http\Models\User;
use App\Http\Models\Promotions;
use App\Http\Models\Products;
use App\Http\Models\Markets;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class PromotionsController extends Controller
{

    // public function showAllUsers()
    // {
    //     return response()->json(User::all());
    // }

    public function getPromotions()
    {
        $promotions = Promotions::where('status', '=', '1')->orderBy('created_at', 'desc')->get()->toArray();
        // return response()->json($promotions);
        $return = array();
        foreach($promotions as $prom){
            $product = Products::where('id', '=', $prom['product_id'])->firstOrFail();
            $market = Markets::where('id', '=', $prom['market_id'])->firstOrFail();
            $user = User::where('id', '=', $prom['created_by'])->firstOrFail();
            $prom['product'] = $product;
            $prom['market'] = $market;
            $prom['created_by_user'] = $user;
            array_push($return, $prom);
        } 
        return response()->json($return);
    }

    public function create(Request $request)
    {
        $product = new Products;
        $product->title = $request->input('title');
        $product->description = $request->input('descProd');
        $product->category = $request->input('category');
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

    public function changeState($id, Request $request)
    {
        $promotion = Promotions::findOrFail($id);
        $promotion->status = 0;
        $promotion->save();
        return response()->json($promotion, 200);
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