@extends('layouts.layout')

@section('titulo', 'Productos')

@section('content')



    <div class="mx-auto container py-12 px-4 sm:px-6 lg:flex lg:items-center lg:justify-between lg:py-16 lg:px-8">
        <a href="https://portfolio-alansan.epizy.com" target="_blank">
            <img src="/build/assets/images/banner.png" alt="My logo" class="lg:w-2/3 w-full mx-auto" />
        </a>

        <div class="mt-5 flex lg:mt-0 items-center lg:flex-shrink-0 justify-between gap-5">
            <a href="https://portfolio-alansan.epizy.com" target="_blank"
                class="my-5 relative inline-flex items-center justify-center p-4 px-7 py-2 overflow-hidden font-medium text-blue-500 dark:text-gray-200 transition duration-300 ease-out border-2 border-blue-500 dark:border-gray-200 rounded-full shadow-md group">
                <span
                    class="absolute inset-0 flex items-center justify-center w-full h-full dark:text-gray-200 duration-300 -translate-x-full bg-transparent group-hover:translate-x-0 ease">
                    <i class='bx bx-left-arrow-alt text-3xl text-blue-500 dark:text-gray-200'></i>
                </span>
                <span
                    class="absolute flex items-center justify-center w-full h-full text-blue-500 dark:text-gray-200 transition-all duration-300 transform group-hover:translate-x-full ease">Ir
                    al portafolio</span>
                <span class="relative invisible">Ir al portafolio</span>
            </a>
            <a href="{{ route('productos.index') }}"
                class="my-5 relative inline-flex items-center justify-center p-4 px-7 py-2 overflow-hidden font-medium text-blue-500 dark:text-gray-200 transition duration-300 ease-out border-2 border-blue-500 dark:border-gray-200 rounded-full shadow-md group">
                <span
                    class="absolute inset-0 flex items-center justify-center w-full h-full dark:text-gray-200 duration-300 -translate-x-full bg-transparent group-hover:translate-x-0 ease">
                    <i class='bx bx-right-arrow-alt text-3xl text-blue-500 dark:text-gray-200'></i>
                </span>
                <span
                    class="absolute flex items-center justify-center w-full h-full text-blue-500 dark:text-gray-200 transition-all duration-300 transform group-hover:translate-x-full ease">Ir
                    a Crud</span>
                <span class="relative invisible">Ir a Crud</span>
            </a>
        </div>
    </div>

@endsection
