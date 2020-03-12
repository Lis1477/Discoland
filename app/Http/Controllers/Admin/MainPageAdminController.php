<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainPageAdminController extends Controller
{
	public function getIndex($url=null) {

		return view('admin.welcom_adm');
	}

}
