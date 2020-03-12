<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainPageController extends Controller
{
	public function getIndex() {

		$title = "Главная страница DISCOLAND.BY";
		$description = "Продаем новые виниловые пластинки, фирменные CD, средства ухода, хранения, упаковка.";

		return view('main_page', compact('title', 'description'));
	}
}
