<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;
use App\Models\Likes;

class FoodController extends Controller
{
    public function index(){
        $fooddata = Food::with('likes')->get();
        return view('welcome', ['foods' => $fooddata]);
    }

    public function food_like($id){
        $like = new Likes;
        $like->food_id = $id;
        $like->save();

        return redirect()->route('home')->with('message','Liked Successfully');
    }

    public function unlike($id){
        $like = Likes::where('food_id', $id)->delete();
        return redirect()->route('home')->with('error','Food DisLiked');
    }
}
