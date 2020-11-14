@extends('layout')
@section('title','Usuarios')
@section('content')
    @if(session('success'))
        <div class="mt-4 bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md pb-4" role="alert">
            <div class="flex">
                <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
                <div>
                    <p class="font-bold">{{session('success')}}</p>
                    <p class="text-sm">Make sure you know how these changes affect you.</p>
                </div>
            </div>
        </div>
    @endif
    <div class="text-center mt-8 items-center justify-between p-4 mb-8 text-sm font-semibold text-purple-100 bg-purple-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple">
        <h1 class="text-2xl">USUARIOS</h1> 
    </div>
            <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
              <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                  <thead>
                    <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                      <th class="px-4 py-3 text-center">Id</th>
                      <th class="px-4 py-3 text-center">Nombre</th>
                      <th class="px-4 py-3 text-center">Email</th>
                      <th class="px-4 py-3 text-center">Acciones</th>
                    </tr>
                  </thead>
                  <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                    @forelse($user as $userItem)
                        @if($userItem->type != 1)
                            <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-2 py-3 text-center">
                                <p class="font-semibold">{{$userItem->id}}</p>
                            </td>
                            <td class="px-4 py-3 text-sm text-center">
                                {{$userItem->name}}
                            </td>
                            <td class="px-4 py-3 text-xs text-center">
                                {{$userItem->email}}
                            </td>
                            <td class="flex px-2 py-3 text-sm text-center">
                                <a href="{{route('user.show',$userItem->id)}}" class="ml-2 px-4 py-1 font-semibold leading-tight text-orange-700 bg-orange-100 rounded-full dark:bg-orange-500 dark:text-orange-100">Ver</a>
                                <a href="{{route('user.edit',$userItem->id)}}" class="ml-2 px-4 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">Editar</a>
                                <form action="{{route('user.destroy',$userItem->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="ml-2 px-4 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:bg-red-700 dark:text-red-100">Eliminar</button>
                                </form>
                            </td>
                            </tr>
                        @endif
                    @empty
                        <li clas="bg-black">no hay nada para mostrar</li> 
                    @endforelse
                  </tbody>
                </table>
              </div>
            </div>
@endsection