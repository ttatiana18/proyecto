@extends('layout')
@section('title','Clientes')
@section('content')
<form action="{{route('productos.update',$producto->idProducto)}}" method="POST">
    @method('PUT')
    @csrf
    <div class="text-center mt-8 items-center justify-between p-4 mb-8 text-sm font-semibold text-purple-100 bg-purple-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple">
        <h1 class="text-2xl">EDITAR PRODUCTO</h1>
    </div>
    <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
                <label class="mt-4 block text-sm">
            <span class="font-bold text-gray-700 dark:text-gray-400">NOMBRE PRODUCTO</span>
                <input
                  type="text"
                  name="nombreProducto"
                  value="{{$producto->nombreProducto}}"
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="Ingrese el nombre del producto"
                  required
                />
        </label>
        <label class="mt-4 block text-sm">
            <span class="font-bold text-gray-700 dark:text-gray-400">REFERENCIA </span>
                <input
                  type="number"
                  name="idProducto"
                  value="{{$producto->idProducto}}"
                  class="bg-gray-100 block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="Ingrese la identificacion del producto"
                  required
                  disabled
                />
        </label>
        <label class="mt-4 block text-sm">
            <span class="font-bold text-gray-700 dark:text-gray-400">DESCRIPCION</span>
                <textarea
                  name="descripcion"
                  class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                  rows="3"
                  placeholder="Ingresa una descripcion breve"
                  required
                >{{$producto->descripcion}}</textarea>
        </label>
        <label class="mt-4 block text-sm">
            <span class="font-bold text-gray-700 dark:text-gray-400">VALOR COMERCIAL</span>
                <input
                  type="number"
                  name="valorComercial"
                  value="{{$producto->valorComercial}}"
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="Ingrese el valor Comercial"
                  required
                />
        </label>
        <label class="mt-4 block text-sm">
            <span class="font-bold text-gray-700 dark:text-gray-400">VALOR COMPRA</span>
                <input
                  type="number"
                  name="valorCompra"
                  value="{{$producto->valorCompra}}"
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="Ingrese el valor de Compra al proveedor"
                  required
                />
        </label>
        <label class="mt-4 block text-sm">
            <span class="font-bold text-gray-700 dark:text-gray-400">CANTIDAD</span>
                <input
                  type="number"
                  name="cantidad"
                  value="{{$producto->cantidad}}"
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="Ingrese la cantidad del producto disponible"
                  required
                />
        </label>
        <label class="mt-4 block text-sm">
            <span class="font-bold text-gray-700 dark:text-gray-400">PROVEEDOR</span>
                <select name="proveedor">
                    @foreach ($proveedores as $proveedor)
                        <option @if($proveedor->nitProveedor == $producto->nitProveedor) selected @endif value="{{$proveedor->nitProveedor}}">{{$proveedor->nombreProveedor}}</option>
                    @endforeach
                </select>
        </label>
        <button type="submit" class="mt-6 px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
            Actualizar
        </button>
    </div>
</form>
@endsection
