@extends('layouts.layout')

@section('titulo', $producto->producto)

@section('content')

    <div class="container mx-auto">

        <a href="{{ route('productos.index') }}"
            class="my-5 relative inline-flex items-center justify-center p-4 px-7 py-2 overflow-hidden font-medium text-blue-500 dark:text-gray-200 transition duration-300 ease-out border-2 border-blue-500 dark:border-gray-200 rounded-full shadow-md group">
            <span
                class="absolute inset-0 flex items-center justify-center w-full h-full dark:text-gray-200 duration-300 -translate-x-full bg-transparent group-hover:translate-x-0 ease">
                <i class='bx bx-left-arrow-alt text-3xl text-blue-500 dark:text-gray-200'></i>
            </span>
            <span
                class="absolute flex items-center justify-center w-full h-full text-blue-500 dark:text-gray-200 transition-all duration-300 transform group-hover:translate-x-full ease">Volver</span>
            <span class="relative invisible">Volver</span>
        </a>

        @if (session('success'))
            {{-- Recibe el parametro de with('info') --}}
            @include('layouts.componentes.alert-success')
        @endif

        @if (session('success_2'))
            @include('layouts.componentes.alert-success-2')
        @endif


        <div class="shadow-md">
            <div
                class="flex flex-row gap-x-10 justify-between bg-gray-300  dark:bg-neutral-800 dark:text-gray-50 rounded-t-md p-4">
                <h1 class="capitalize  font-bold">{{ $producto->producto }}</h1>
                <div class="flex center items-center flex-column gap-x-5">
                    <p class="font-bold text-lime-600">${{ $producto->precio }}</p>
                    <p class=""> / </p>
                    <p class="font-medium">{{ $producto->stock }}</p>
                </div>
            </div>
            <div class="bg-gray-200 dark:text-gray-100 dark:bg-stone-800 dark:border-neutral-700 p-4 rounded-b-md">
                <h2 class="text-lg mb-3 font-semibold">Descripcion</h2>
                <p class="pb-3 font-normal text-gray-500 dark:text-gray-100">{{ $producto->descripcion }}</p>
                <div class="flex mt-10 mb-5 center items-center flex-row justify-between w-full">
                    <a href="{{ route('productos.edit', $producto->slug) }}"
                        class="relative mx-3 inline-flex items-center justify-start px-5 py-3 overflow-hidden font-bold rounded-full group">
                        <span
                            class="w-32 h-32 rotate-45 translate-x-12 -translate-y-2 absolute left-0 top-0 bg-transparent dark:bg-white opacity-[3%]"></span>
                        <span
                            class="absolute top-0 left-0 w-48 h-48 -mt-1 transition-all duration-500 ease-in-out rotate-45 -translate-x-56 -translate-y-24 bg-blue-500 dark:bg-gray-300  opacity-100 group-hover:-translate-x-8"></span>
                        <span
                            class="relative w-full text-left text-blue-500 dark:text-white  transition-colors duration-200 ease-in-out group-hover:text-white dark:group-hover:text-gray-900">Actualizar</span>
                        <span class="absolute inset-0 border-2 border-blue-500 dark:border-gray-700 rounded-full"></span>
                    </a>

                    <form method="post" class="relative inline-block group"
                        action="{{ route('productos.destroy', $producto) }}">
                        @method('delete')
                        @csrf

                        <button
                            class="relative mx-3 inline-flex items-center justify-start px-5 py-3 overflow-hidden font-bold rounded-full group">
                            <span
                                class="w-32 h-32 rotate-45 translate-x-12 -translate-y-2 absolute left-0 top-0 bg-transparent dark:bg-white opacity-[3%]"></span>
                            <span
                                class="absolute top-0 left-0 w-48 h-48 -mt-1 transition-all duration-500 ease-in-out rotate-45 -translate-x-56 -translate-y-24 bg-red-400 dark:bg-gray-300  opacity-100 group-hover:-translate-x-8"></span>
                            <span
                                class="relative w-full text-left text-red-400 dark:text-white  transition-colors duration-200 ease-in-out group-hover:text-white dark:group-hover:text-gray-900">Eliminar</span>
                            <span class="absolute inset-0 border-2 border-red-400 dark:border-gray-700 rounded-full"></span>
                        </button>
                    </form>
                </div>
            </div>
        </div>



    </div>

@endsection
