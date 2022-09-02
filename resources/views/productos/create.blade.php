@extends('layouts.layout')

@section('titulo', 'Crear producto')

@section('content')

    <div class="container px-4 lg:px-6 mx-auto">
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

        @include('layouts.componentes.form-create')
    </div>


@endsection
