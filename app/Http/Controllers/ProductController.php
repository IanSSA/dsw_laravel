<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function products() {
        $viewData = [];
        $viewData["title"] = "Productos - Tienda Online";
        $viewData["subtitle"] =  "Productos";
        $viewData["description"] =  "Esta es la página acerca de ...";
        $viewData["author"] = "Desarrollado por: DSW";
        $viewData["productos"] = Product::all();

        return view("products.index")->with("viewData", $viewData);
    }

    public function show($id) {
        $viewData = [];
        $viewData["title"] = "Producto " . $id . " - Tienda Online";
        $viewData["subtitle"] =  "Productos";
        $viewData["description"] =  "Esta es la página acerca de ...";
        $viewData["author"] = "Desarrollado por: DSW";
        $viewData["producto"] = Product::find($id);
        return view("products.show")->with("viewData", $viewData);
    }
}
