<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Drink;

class drinkController extends Controller
{
    //
    public function index(){
        $drink = Drink::all();

        if(!$drink){
            return response()->json([
                "message" => "No drink found"
            ]);
        }

        return response()->json([
            'message'=>'Success',
            'data'=>$drink
        ]);
    }

    public function byId($id){
        $drink = Drink::find($id);

        if(!$drink){
            return response()->json([
                'message'=>'No drink found'
            ], 404);
        }

        return response()->json([
            'message'=>'Success',
            'data'=>$drink
        ]);
    }

    public function push(Request $request){
        $validateData = $request->validate([
            'name'=>'required|string',
            'price'=>'required|numeric',
            'description'=>'required|string',
            'image'=>'required|string',
        ]);

        $drink = Drink::create($validateData);

        return response()->json([
           'message' => 'Success',
            'data' => $drink
        ]);
    }
}
