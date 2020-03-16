<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;

class ProductPageController extends Controller
{
	public function getIndex($cat_slug){
		$cat = Category::where('slug', $cat_slug)->first();

		$title = $cat->name;
		$description = $cat->description;

		return view('product_page', compact('cat', 'title', 'description'));

	}
}
