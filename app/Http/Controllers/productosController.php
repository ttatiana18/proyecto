<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Proveedor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class productosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('productos/index',[
            'productos' =>Producto:: all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $proveedores = Proveedor::all();
        return view ('productos/crear', compact('proveedores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $producto = new Producto;
        $producto->nombreProducto = $request->nombreProducto;
        $producto->descripcion = $request->descripcion;
        $producto->valorComercial = $request->valorComercial;
        $producto->valorCompra = $request->valorCompra;
        $producto->nitProveedor = $request->proveedor;
        $producto->cantidad = $request->cantidad;
        $producto->save();
        return redirect(route('productos.index'))->with('success','Proveedor creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $producto = Producto::findOrFail($id);

        return view('productos.show', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proveedores = Proveedor::all();
        $producto = Producto::findOrFail($id);
        return view ('productos/editar', compact('proveedores', 'producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $producto = Producto::findOrFail($id);
        $producto->nombreProducto = $request->nombreProducto;
        $producto->descripcion = $request->descripcion;
        $producto->valorComercial = $request->valorComercial;
        $producto->valorCompra = $request->valorCompra;
        $producto->nitProveedor = $request->proveedor;
        $producto->cantidad = $request->cantidad;
        $producto->save();
        return redirect(route('productos.index'))->with('success','Proveedor modificado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!Auth::check() || Auth()->user()->type == 0) abort(403);

        $producto = Producto::destroy($id);
        return redirect(route('productos.index'))->with('success','Producto eliminado correctamente');
    }
}
