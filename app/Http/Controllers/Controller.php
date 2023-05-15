<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Product;

class Controller extends BaseController
{
    public function showHomePage(Request $request) {
        $products = Product::orderBy('id', "DESC")->take(6)->get();
        return view('homepage', ['products' => $products]);
    }
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
