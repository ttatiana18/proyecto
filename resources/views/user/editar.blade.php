@extends('layout')
@section('title','Usuarios')
@section('content')
<form action="{{route('user.update',$user->id)}}" method="POST">
    @method('PUT')
    @csrf
    <div class="text-center mt-8 items-center justify-between p-4 mb-8 text-sm font-semibold text-purple-100 bg-purple-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple">
        <h1 class="text-2xl">EDITAR USUARIO</h1> 
    </div>
    <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
        <label class="mt-4 block text-sm">
            <span class="font-bold text-gray-700 dark:text-gray-400">NOMBRE</span>
                <input
                  type="text"
                  name="name"
                  value="{{$user->name}}" 
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="Ingrese el nombre del cliente"
                  required
                />
        </label>
        <label class="mt-4 block text-sm">
            <span class="font-bold text-gray-700 dark:text-gray-400">EMAIL</span>
                <input
                  type="email"
                  name="email"
                  value="{{$user->email}}"
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="Ingrese el email del usuario"
                  required
                />
        </label>
        <label class="mt-4 block text-sm">
            <span class="font-bold text-gray-700 dark:text-gray-400">PASSWORD</span>
                <input
                  type="password"
                  name="password"
                  value="{{$user->password}}"
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="Ingrese la contraseña"
                  required
                />
        </label>
        <button type="submit" class="mt-6 px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
            Actualizar
        </button>
    </div>
</form>
@endsection