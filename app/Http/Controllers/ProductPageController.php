<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
//use Illuminate\Support\Collection;

class ProductPageController extends Controller
{
	public function getIndex($cat_slug){
		$cat = Category::where('slug', $cat_slug)->first();

		$title = $cat->name;
		$description = $cat->description;

		if($cat->parent_id == 0) {
			$catalogs = Category::where('parent_id', $cat->id)->get('id');
			$cat_id = array();
			foreach ($catalogs as $item) {
				array_push($cat_id, $item->id);
			}
			$products = Product::whereIn('category_id', $cat_id)->where('display', '!=', 0)->orderBy('name')->paginate(15);

			return view('product_page', compact('cat', 'products', 'title', 'description', 'cat_slug'));

		} else {
			$products = Product::where('category_id', $cat->id)->where('display', '!=', 0)->orderBy('name')->paginate(15);
			$sub_cat_slug = $cat->slug;
			$parent_id = $cat->parent_id;

			return view('product_page', compact('cat', 'products', 'title', 'description', 'sub_cat_slug', 'parent_id'));

		}

	}
}
