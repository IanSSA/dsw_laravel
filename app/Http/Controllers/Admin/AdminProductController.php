<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Http\Controllers\Controller;

class AdminProductController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Admin Page - Products - Online Store";
        $viewData["products"] = Product::all();
        return view('admin.product.index')->with("viewData", $viewData);
    }

    public function newproduct()
    {
        $new_product = new Product;
        $new_product->pic_name = $Request->name;
        $new_product->nombre_completo = $Request->name;
        $new_product->pic_name = $Request->name;
        $viewData["products"] = Product::all();
        return view('admin.product.index')->with("viewData", $viewData);
    }
}
