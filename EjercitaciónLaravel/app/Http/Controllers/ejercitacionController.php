<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Factura;
use App\Models\Producto;

class ejercitacionController extends Controller
{
    public function verFacturas(){
        $facturas = Factura::all();

        return view('/welcome')->with('facturas', $facturas);
    }
    public function detalle($id){
        $factura = Factura::find($id);
        $productos = Producto::where("factura_id", "=", $id)->get();
        return view('/detalle')->with('factura', $factura)->with('productos', $productos);
    }
    public function mostrarJson($id){
        $productosJson = Producto::where("factura_id", "=", $id)->get()->toJson();
        return view('/json')->with('productosJson', $productosJson);
    }
}