<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class SearchResultController extends Controller
{
    public function postIndex() {

    	$search_string = $_POST['search_string'];
	    $products = Product::where('name', 'LIKE', '%'.$search_string.'%')
	    	->where('display', '!=', 0)
	    	->orderBy('name')
	    	->paginate(46);

	    //dd(count($products));

		$title = "Результат поиска";
		$description = "";
		$cat_slug = "";

	    if(count($products) != 0 AND count($products) < 46) {
		    return view('search_result', compact('products', 'search_string', 'title', 'description', 'cat_slug'));
	    } else {
	    	if(count($products) == 0) $txt = "Ничего не найдено!";
	    		else $txt = "Слишком много результатов! Уточните поисковый запрос.";
		    return view('search_result', compact('search_string', 'title', 'description', 'cat_slug', 'txt'));
	    }
	}
}
