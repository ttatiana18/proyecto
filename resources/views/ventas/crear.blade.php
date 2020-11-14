@extends('layout')
@section('title','Facturar')
@section('content')
<form action="{{route('ventas.setQuantity')}}" method="POST">
    @csrf
    <div
        class="text-center mt-8 items-center justify-between p-4 mb-8 text-sm font-semibold text-purple-100 bg-purple-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple">
        <h1 class="text-2xl">REGISTRAR VENTA</h1>
    </div>
    <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
        <label class="mt-4 block text-sm">
            <span class="font-bold text-gray-700 dark:text-gray-400">Cliente </span>
            <select name="cliente" required>
                @foreach ($clientes as $cliente)
                    <option value="{{$cliente->nit}}"> {{$cliente->nombreCliente}} </option>
                @endforeach
            </select>
        </label>
        <label class="mt-4 block text-sm">
            <span class="font-bold text-gray-700 dark:text-gray-400">Productos</span>
            <div class="relative">
                <select required name="productos[]" multiple class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                    @foreach ($productos as $producto)
                        <option value="{{$producto->idProducto}}"> {{$producto->nombreProducto}} </option>
                    @endforeach
                </select>
            </div>
        </label>
        <button type="submit"
            class="mt-6 px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
            Siguiente
        </button>
    </div>
</form>
@endsection
