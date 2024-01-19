<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function products() {
        $viewData = [];
        $viewData["title"] = "Productos - Tienda Online";
        $viewData["subtitle"] =  "Productos";
        $viewData["description"] =  "Esta es la página acerca de ...";
        $viewData["author"] = "Desarrollado por: DSW";

        return view("products.index")->with("viewData", $viewData);
    }
}
