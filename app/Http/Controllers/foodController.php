<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Food;

class foodController extends Controller
{
    //public
    public function index(){
        $food = Food::all();

        if(!$food){
            return response()->json([
                "message" => "No food found"
            ]);
        }

        return response()->json(['data' => $food]);
    }

    public function push(Request $request){
        $validateData = $request->validate([
            'name'=> 'required|string',
            'price'=> 'required|numeric',
            'description'=> 'required|string',
            'image'=> 'required|string',
        ]);

        $food = Food::create($validateData);

        return response()->json([
            'message' => 'Success',
            'data' => $food
        ]);
    }

    public function pop($id){

        $food = Food::find($id);

        if(!$food){
            return response()->json([
              'message' => 'Food not found'
            ], 404);
        }

        $food->delete();

        return response()->json([
            'message' => 'Food deleted',
            'id' => $id
        ]);
    }

    public function byId($id){

        $food = Food::find($id);

        if(!$food){
            return response()->json([
             'message' => 'Food not found'
            ], 404);
        }
        return response()->json([
            'message'=> 'Success',
            'data' => $food
        ]);
    }

    public function update(Request $request, $id){

        $food = Food::find($id);

        if(!$food){
            return response()->json([
              'message' => 'Food not found'
            ], 404);
        }

        $validateData = $request->validate([
            'name'=> 'required|string',
            'price'=> 'required|numeric',
            'description'=> 'required|string',
            'image'=> 'required|string',
        ]);

        $food->update($validateData);

        return response()->json([
            'message'=> 'Success',
            'data' => $food
        ]);
        
    }
}
