<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminProductController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Admin Page - Products - Online Store";
        $viewData["products"] = Product::all();
        return view('admin.product.index')->with("viewData", $viewData);
    }

    public function newproduct(Request $Request)
    {
        $Request->validate([
            "name" => "required|max:255",
            "price" => "required|numeric|min:0",
        ]);
        $new_product = new Product;
        $new_product->nombre_completo = $Request->input('name');
        $new_product->precio = $Request->input('price');
        $new_product->pic_name = "none";
        $new_product->save();
        $viewData["title"] = "Admin Page - Products - Online Store";
        $viewData["products"] = Product::all();
        return view('admin.product.index')->with("viewData", $viewData);
    }
}
