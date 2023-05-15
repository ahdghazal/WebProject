<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function showMenuPage(Request $request) {
       $beefProducts= Product::where("category","Beef")->get();
       $chickenProducts= Product::where("category","Chicken")->get();
       $appetizerProducts= Product::where("category","Appetizer")->get();

        return view('menu',['beefProducts' => $beefProducts,'chickenProducts' => $chickenProducts,'appetizerProducts' => $appetizerProducts ]);

    }
    public function addToCart(Request $request) {
        if(!($request->session()->get('cart'))) {
            $request->session()->put('cart', []);
        }
        $request->session()->push('cart' , ["id" => $request->productId, "quantity" => $request->quantity]);
        
        $cartCount = 0;
        foreach ($request->session()->get('cart') as $item) {
            error_log(json_encode($item['quantity']));
            $cartCount = $cartCount + intval($item['quantity']);
        }
        return response(['message' => $request->quantity . ' products added successfully', 'cartCount' => $cartCount], 200);
    }
    public function showOrderPage(Request $request) {
        return view('order');
    }
    public function showCartPage(Request $request) {
        return view('cart');
    }
    public function showSubmitInfo(Request $request) {
        return view('submitinfo');
    }




}
