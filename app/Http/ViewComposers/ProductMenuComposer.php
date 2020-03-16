<?php
namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use App\Models\Category;

class ProductMenuComposer {
	public function compose(View $view) {
		$view_cat = Category::where('parent_id', 0)->orderBy('order')->get();

		$view->with('view_cat', $view_cat);
	}
}