<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function showFormProduct()
    {
        return view("product/productForm");
    }

    function discountProduct(Request $request)
    {
        $productDes = $request->description;
        $price = $request->price;
        $discount = $request->discount;
        $result = $price * $discount * 0.1;
        $discountPrice = $price - $result;

        return view("product/show_discount_amount", compact('productDes', 'price', 'discount', 'result', 'discountPrice'));
    }
}
