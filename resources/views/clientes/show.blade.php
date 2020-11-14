@extends('layout')
@section('title','Clientes')
@section('content')
    @if(session('success'))
        <div class="mt-8 bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md pb-4" role="alert">
            <div class="flex">
                <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
                <div>
                    <p class="font-bold">{{session('success')}}</p>
                    <p class="text-sm">Make sure you know how these changes affect you.</p>
                </div>
            </div>
        </div>
    @endif
    <div class="grid md:grid-cols-2">
        <div class="text-center mt-4 items-center justify-between p-4 mb-8 text-sm font-semibold text-purple-100 bg-purple-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple">
        <h1 class="text-2xl">CLIENTE</h1> 
        </div>
    </div>
    <div class="grid mb-8 md:grid-cols-2">
        <div class="p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
            <h4 class="ml-2 mr-2 mb-4 font-semibold text-gray-600 dark:text-gray-300">
                NOMBRE
            </h4>
            <input class="ml-2 block w-full bg-gray-100 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" value="{{$cliente->nombreCliente}}" disabled/>
            <h4 class="mt-4 ml-2 mb-4 font-semibold text-gray-600 dark:text-gray-300">
                NIT
            </h4>
            <input class="ml-2 block w-full bg-gray-100 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" value="{{$cliente->nit}}" disabled/>
            <h4 class="mt-4 ml-2 mb-4 font-semibold text-gray-600 dark:text-gray-300">
                TELEFONO
            </h4>
            <input class="ml-2 block w-full bg-gray-100 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" value="{{$cliente->telefono}}" disabled/>
            <h4 class="mt-4 ml-2 mb-4 font-semibold text-gray-600 dark:text-gray-300">
                DIRECCION
            </h4>
            <input class="ml-2 block w-full bg-gray-100 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" value="{{$cliente->direccion}}" disabled/>
            <h4 class="mt-4 ml-2 mb-4 font-semibold text-gray-600 dark:text-gray-300">
                EMAIL
            </h4>
            <input class="ml-2 block w-full bg-gray-100 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" value="{{$cliente->email}}" disabled/>
        <div class="mt-6 w-1/2 flex">
            <a href="{{route('clientes.edit',$cliente->nit)}}" class="ml-2 px-4 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">Editar</a>
            @if (Auth::check() && Auth()->user()->type == 1)
                <form action="{{route('clientes.destroy',$cliente->nit)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="ml-2 px-4 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:bg-red-700 dark:text-red-100">Eliminar</button>
                </form>
            @endif
        <div>
        </div>
    </div>
    </div>
@endsection