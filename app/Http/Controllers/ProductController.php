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

    public function show($id) {
        $viewData = [];
        $viewData["title"] = "Producto " . $id . " - Tienda Online";
        $viewData["subtitle"] =  "Productos";
        $viewData["description"] =  "Esta es la página acerca de ...";
        $viewData["author"] = "Desarrollado por: DSW";
        $productos = array(
            array('game.png','Videojuego',100), 
            array('safe.png','Caja fuerte',250),
            array('submarine.png','submarino',5300));
        $viewData["producto"] = $productos[$id-1];
        return view("products.show")->with("viewData", $viewData);
    }
}
