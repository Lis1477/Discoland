<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class DatalistController extends Controller
{
    public function postIndex() {

    	$objs = Product::where('name', 'LIKE', '%'.$_POST['list'].'%')->get();

    	return response()->json($objs);
    }
}
