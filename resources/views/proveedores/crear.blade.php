@extends('layout')
@section('title','Proveedores')
@section('content')
<form action="{{route('proveedores.store')}}" method="POST">
    @csrf
    <div class="text-center mt-8 items-center justify-between p-4 mb-8 text-sm font-semibold text-purple-100 bg-purple-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple">
        <h1 class="text-2xl">CREAR PROVEEDOR</h1> 
    </div>
    <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
        <label class="mt-4 block text-sm">
            <span class="font-bold text-gray-700 dark:text-gray-400">NOMBRE</span>
                <input 
                  type="text"
                  name="nombreProveedor"
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="Ingrese el nombre del proveedor"
                  required
                />
        </label>
        <label class="mt-4 block text-sm">
            <span class="font-bold text-gray-700 dark:text-gray-400">NIT</span>
                <input
                  type="number"
                  name="nitProveedor"
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="Ingrese el NIT o cedula del proveedor"
                  required
                />
        </label>
        <label class="mt-4 block text-sm">
            <span class="font-bold text-gray-700 dark:text-gray-400">TELEFONO</span>
                <input
                  type="number"
                  name="telefono"
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="Ingrese un teléfono"
                  required
                />
        </label>
        <label class="mt-4 block text-sm">
            <span class="font-bold text-gray-700 dark:text-gray-400">DIRECCION</span>
                <input
                  type="text"
                  name="direccion"
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="Ingrese una direccion"
                  required
                />
        </label>
        <button type="submit" class="mt-6 px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
            Crear
        </button>
    </div>
</form>
@endsection