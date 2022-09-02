<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function home(){


        return view('productos.home');
    }

    public function index(){

        $productos = Producto::paginate(5);

        return view('productos.index', compact('productos'));
    }

    public function show(Producto $producto){

        return view('productos.show', compact('producto'));
    }

    public function create(){

        return view('productos.create');
    }

    public function store(Request $request, Producto $producto){

        $nombreProducto = $request->producto;

        $producto->producto = $nombreProducto;
        $producto->precio = $request->precio;
        $producto->stock = $request->stock;
        $producto->slug = Str::slug($nombreProducto, '-');
        $producto->descripcion = $request->descripcion;

        $producto->save();

        return redirect()->route('productos.show',compact('producto'))->with('success', 'Creado correctamente');
    }

    public function edit(Producto $producto){

        return view('productos.edit', compact('producto'));
    }

    public function update(Request $request, Producto $producto){

        $nombreProducto = $request->producto;

        $producto->producto = $nombreProducto;
        $producto->precio = $request->precio;
        $producto->stock = $request->stock;
        $producto->slug = Str::slug($nombreProducto, '-');
        $producto->descripcion = $request->descripcion;

        $producto->save();

        return redirect()->route('productos.show', $producto->slug)->with('success', 'El producto se actualizó correctamente');
    }
    public function destroy(Producto $producto){

        $producto->delete();
        
        return redirect()->route('productos.index')->with('delete', 'Producto eliminado correctamente');
    }
}
