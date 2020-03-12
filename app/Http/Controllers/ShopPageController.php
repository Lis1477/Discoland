<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;

class ShopPageController extends Controller
{
	public function getIndex() {
		$cat = Category::where('parent_id', 0)->orderBy('order')->get();

		$new_vinyl = Product::where([['in_stock', '>', 0], ['display', 1], ['category_id', 6]])
			->orWhere([['in_stock', '>', 0], ['display', 1], ['category_id', 7]])
			->orWhere([['in_stock', '>', 0], ['display', 1], ['category_id', 8]])
			->orderBy('created_at', 'desc')
			->limit(10)
			->get();

		$new_cd = Product::where([['in_stock', '>', 0], ['display', 1], ['category_id', 9]])
			->orWhere([['in_stock', '>', 0], ['display', 1], ['category_id', 10]])
			->orderBy('created_at', 'desc')
			->limit(10)
			->get();

		$title = "Интернет магазин DISCOLAND.BY";
		$description = "Продаем новые виниловые пластинки, фирменные CD, средства ухода, хранения, упаковка.";

		return view('shop_page', compact('new_vinyl', 'new_cd', 'cat', 'title', 'description'));
	}
}
