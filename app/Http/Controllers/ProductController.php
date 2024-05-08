<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function index(){
return view('products.list');
    }

    // =========================end index============

    public function create(){
        return view('products.create');

    }
        // =========================end create============

    public function store(Request $request){
$rules =[
    'name'=> 'required|min:5',
    'sku'=> 'required|min:3',
    'price'=> 'required|numeric',


];

if($request->image != ""){
$rules['image']='image';
}
        $validator=Validator::make($request->all(),$rules);
if($validator->fails()){
    return redirect()->route('products.create')->withInput()->withErrors($validator);
}

$product =new Product();
$product -> name = $request->name;
$product -> sku = $request->sku;
$product -> price = $request->price;
$product -> description = $request->description;
$product->save();
$image = $request->image;
$ext = $image->getClientOriginalExtension();
$imageName = time()

return redirect()->route('products.index')->with('success','Product added succesfully');


    }
        // =========================end store============

    public function edit(){

    }
        // =========================end edit============

    public function update(){

    }
        // =========================end update============

    public function destroy(){

    }
        // =========================end destroy============

}
