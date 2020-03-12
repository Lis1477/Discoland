<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use Illuminate\Support\Str;

class ReplaceTableController extends Controller
{
	public function getIndex($url=null) { // переносим данные категорий

		$old = DB::table('ss_categories')->where('parent', 0)->get();
		foreach ($old as $value) {
			// Главные категории
			$new['old_id'] = $value->categoryID;
			$new['name'] = $value->name;
			$new['slug'] = Str::of($value->name)->slug();
			$new['description'] = $value->description_small;
			$new['text'] = $value->description;
			$new['picture'] = $value->picture;
			$new['order'] = $value->order_cat;

			$result = DB::table('categories')->insert($new);
		}

		$old = DB::table('ss_categories')->where('parent', '!=', 0)->get();
		foreach ($old as $value) {
			// Дочерние категории
			$new['old_id'] = $value->categoryID;
			$new['name'] = $value->name;
			$new['slug'] = Str::of($value->name)->slug();
			$new['description'] = $value->description_small;
			$new['text'] = $value->description;
			$new['picture'] = $value->picture;
			$new['order'] = $value->order_cat;

			$id_dother = DB::table('categories')->where('old_id', $value->parent)->first('id');
			$new['parent_id'] = $id_dother->id;
			$result = DB::table('categories')->insert($new);			
		}
		dd($result);
 		return view('admin.replace');
    }

	public function getIndexProd($url=null) { // переносим данные товаров

		$old = DB::table('ss_products')->where('price', '<', 1000)->get();
		foreach ($old as $value) {
			$new['old_id'] = $value->productID;
			$new['name'] = $value->name;
			$new['slug'] = Str::of($value->name)->slug();
			$new['description'] = $value->brief_description;
			$new['text'] = $value->description;
			$new['pretext'] = $value->brief_description;
			$new['code'] = $value->product_code;
			$new['big_picture'] = $value->big_picture;
			$new['sm_picture'] = $value->picture;
			$new['price'] = $value->Price;
			$new['in_stock'] = $value->in_stock;
			$new['display'] = $value->enabled;
			$new['created_at'] = $value->up_date;

			$id_cat = DB::table('categories')->where('old_id', $value->categoryID)->first('id');


			$new['category_id'] = $id_cat->id;

			$result[] = DB::table('products')->insert($new);
		}
		dd($result);
 		return view('admin.replaceprod');

	}


}
