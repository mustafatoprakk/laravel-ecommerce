<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Session;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view("product", compact("products"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // Search product
        $datas = Product::where("name", "like", '%' . $request->input("search") . '%')
            ->get();
        return view("search-data", compact("datas"));
    }

    // add to cart
    public function addToCart(Request $request)
    {
        if ($request->session()->has("user")) {
            $cart = new Cart();
            $cart->user_id = $request->session()->get("user")["id"];
            $cart->product_id = $request->product_id;
            $cart->save();
            return redirect("/");
        } else {
            return redirect("/login");
        }
    }

    // cart count of product
    static public function cartItem()
    {
        $userId = Session::get("user")["id"];
        return Cart::where("user_id", $userId)->count();
    }

    // cart list                *********************************************************
    public function cartList()
    {
        $userId = Session::get("user")["id"];
        $products = Cart::where("carts.user_id", $userId)
            ->join("products", "carts.product_id", "products.id")
            ->select("products.*", "carts.id as cart_id")
            ->get();

        return view("cart", compact("products"));
    }

    //remove cart product
    public function removeCart($id)
    {
        Cart::find($id)->delete();
        return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        return view("product-detail", compact("product"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
