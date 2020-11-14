<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Factura;
use App\Models\FacturaItem;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class facturasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('ventas.index',[
            'facturas' =>Factura:: all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $productos = Producto::all();
        $clientes = Cliente::all();
        return view ('ventas.crear', compact('productos', 'clientes'));
    }

    public function setQuantity(Request $request){

        $cliente = $request->cliente;
        $productos = Producto::find($request->productos);
        return view ('ventas.crear2', compact('cliente', 'productos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $factura = new Factura;
        $factura->nitCliente = $request->cliente;
        $factura->save();

        foreach ($request->producto as $key => $producto) {
            $item = new FacturaItem;
            $productoOrigen = Producto::findOrFail($producto);
            if($productoOrigen->cantidad >= $request->cantidad[$key])
            {
                $item->factura_id = $factura->id;;
                $item->item_id = $producto;
                $item->cantidad = $request->cantidad[$key];
                $productoOrigen->cantidad = $productoOrigen->cantidad - $request->cantidad[$key];
                $item->save();
                $productoOrigen->save();
            }
            else
            {
                $factura->forceDelete();
                return redirect(route('ventas.index'))->with('success','No pudo crearse la factura, cantidad insuficiente');
            }
        }
        return redirect(route('ventas.index'))->with('success','Factura creada correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $factura = Factura::findOrFail($id);
        $items = $factura->items;

        return view('ventas.show', compact('factura', 'items'));
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

        Factura::destroy($id);
        return redirect(route('ventas.index'))->with('success','Factura eliminada correctamente');
    }
}
