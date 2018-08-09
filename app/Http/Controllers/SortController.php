<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;

class SortController extends Controller
{

	public function index(){


	}


    public function sortABC($id){


		$categories = Category::all();
		$products = Product::where('category_id',$id)->orderBy('name','asc')->get();
	    return view('home',compact('categories','products'));
	
    }

    public function sortPrice($id){


		$categories = Category::all();
 	    $products = Product::where('category_id',$id)->orderBy('price','desc')->get();
        return view('home',compact('categories','products'));
	
    }
}
