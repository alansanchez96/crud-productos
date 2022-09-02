@extends('layouts.layout')

@section('titulo', 'Productos')

@section('content')

    <div class="container mx-auto">

        <a href="{{ route('productos.create') }}"
            class="my-5 relative inline-flex items-center justify-center p-4 px-7 py-2 overflow-hidden font-medium text-green-400 dark:text-gray-200 transition duration-300 ease-out border-2 border-green-400 dark:border-gray-200 rounded-full shadow-md group">
            <span
                class="absolute inset-0 flex items-center justify-center w-full h-full dark:text-gray-200 duration-300 -translate-x-full bg-transparent group-hover:translate-x-0 ease">
                <i class='bx bx-right-arrow-alt text-3xl text-green-400 dark:text-gray-200'></i>
            </span>
            <span
                class="absolute flex items-center justify-center w-full h-full text-green-400 dark:text-gray-200 transition-all duration-300 transform group-hover:translate-x-full ease">Crear</span>
            <span class="relative invisible">Crear</span>
        </a>

        @if (session('delete'))
            {{-- Recibe el parametro de with('info') --}}
            @include('layouts.componentes.alert-delete')
        @endif

        @include('layouts.componentes.table')
        {{ $productos->links() }}
    </div>

@endsection
