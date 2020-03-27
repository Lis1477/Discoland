<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductItemController extends Controller
{
	public function getIndex($cat_slug, $product_slug) {
		$cat = Category::where('slug', $cat_slug)->first('parent_id');
		$prod = Product::where('slug', $product_slug)->first();

		$title = $prod->name;
		$description = $prod->description;
		$sub_cat_slug = $cat_slug;
		$parent_id = $cat->parent_id;

		return view('product_item', compact('prod','title', 'description', 'sub_cat_slug', 'parent_id'));
	}
}
