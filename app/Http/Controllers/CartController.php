<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{

    public function getIndex() {
//        $name = (isset(Auth::user()->name)) ? Auth::user()->name : '';
//        $email = (isset(Auth::user()->email)) ? Auth::user()->email : '';
        $tov = $this->cook_arr();
        $val = $this->cook_value();
//        dd($tov, $val, $name, $email);

		$title = "Корзина товаров";
		$description = "";
		$cat_slug = "";

//        return view('cart')->with('tov', $tov)->with('val',$val)->with('name', $name)->with('email', $email);
		return view('cart', compact('tov', 'val', 'title', 'description', 'cat_slug'));
    }

    public function getDelete($id = null)
    {
        $tov = $this->cook_count();
        unset($tov[$id]);
        $this->cook_add($tov);
        return redirect('korzina-tovarov');
    }

    public function postEdit($id = null) {
    	$colvo = (int) $_POST['colvo'];
    	$tov = $this->cook_count();
//    	dd($tov[$id], $colvo);
    	$tov[$id] = $colvo;
    	$this->cook_add($tov);
    	return redirect()->back();
    }


    public function cook_arr()
    {
        $cook = (isset($_COOKIE['basket'])) ? $_COOKIE['basket'] : 0;
        $big_arr = explode(',', $cook);
        $tov = array();
        foreach ($big_arr as $value_arr) {
            $arr = explode(':', $value_arr);
            if ($arr[0] != null) {
                $tov[$arr[0]] = Product::find($arr[0]);
            }
        }
        return $tov;
    }

    public function cook_value()
    {
        $cook = (isset($_COOKIE['basket'])) ? $_COOKIE['basket'] : 0;
        if($cook !=0){
            $big_arr = explode(',', $cook);
            $val = array();
            foreach ($big_arr as $value_arr) {
                $arr = explode(':', $value_arr);
                if ($arr[0] != null) {
                    $val[$arr[0]] = $arr[1];
                }
            }
            return $val;
        }
    }

    public function cook_add($tov = [])
    {
        $str = '';
        $summa = '';

        foreach ($tov as $key => $value) {
            $tovv = Product::find($key);
            $str .= $key . ':' . $value . ':' . $tovv->price . ',';
        }
        setcookie('basket', $str, time() + 3600*24*7, '/');
    }

    public function cook_count()
    {
        $cook = (isset($_COOKIE['basket'])) ? $_COOKIE['basket'] : 0;
        $big_arr = explode(',', $cook);
        $tov = array();
        foreach ($big_arr as $key => $value) {
            $arr = explode(':', $value);
            if ($arr[0] != null) {
                $tov[$arr[0]] = $arr[1];
            }
        }
        return $tov;
    }
}
