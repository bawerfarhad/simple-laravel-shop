<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductsController extends Controller
{
    public function index(){
        $Products=Products::all();
        return view('Products.products', compact('Products'));
    }
    public function show($id){
        $Products=Products::findOrFail($id);
        return view('Products.details', compact('Products'));
    }

    public function create(){

        return view('Products.create');
    }

}
