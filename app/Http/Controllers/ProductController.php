<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //

    public function adding(Request $request){
$items=new Product();
$items->name=$request->name;
$items->value=$request->value;
$items->quantity=$request->quantity;

$items->save();
return response()->json('Added Successfully');
    }

    public function edit(Request $request){
        $items=Product::findorfail($request->id);
        $items->name=$request->name;
$items->value=$request->value;
$items->quantity=$request->quantity;

$items->update();
return response()->json('Updated Successfully');
    }
    public function delete(Request $request){
        $items=Product::findorfail($request->id)->delete();
return response()->json('Deleted Successfully');
    }
    /*public function getData(Request $request){
        $Product=Product::findOrFail($request->id);
        $items = $Product->getData();
return response()->json($items);
    }*/
    public function getData(){
        $items = Product::all();
        return response()->json($items);
    }
}
