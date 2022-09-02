<div class="overflow-x-auto relative shadow-md sm:rounded-lg mb-5">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-neutral-700 dark:text-gray-50">
            <tr>
                <th scope="col" class="py-3 px-6 justify-center">
                    Producto
                </th>
                <th scope="col" class="py-3 px-6">
                    <div class="flex items-center justify-center">
                        Precio
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="ml-1 w-3 h-3" aria-hidden="true"
                                fill="currentColor" viewBox="0 0 320 512">
                                <path
                                    d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z">
                                </path>
                            </svg></a>
                    </div>
                </th>
                <th scope="col" class="py-3 px-6">
                    <div class="flex items-center justify-center">
                        Stock
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="ml-1 w-3 h-3"
                                aria-hidden="true" fill="currentColor" viewBox="0 0 320 512">
                                <path
                                    d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z">
                                </path>
                            </svg></a>
                    </div>
                </th>
                <th scope="col" class="py-3 px-6 flex items-center justify-center">
                    Acciones
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($productos as $producto)
                <tr class="bg-gray-100 border-b dark:bg-stone-800 dark:border-neutral-700">
                    <th scope="row" class="py-4 px-6 font-semibold capitalize text-blue-700 whitespace-nowrap dark:text-white">
                        <a href="{{ route('productos.show', $producto->slug) }}" class="hover:text-blue-400 dark:hover:text-gray-500">
                            {{ $producto->producto }}
                        </a>
                    </th>
                    <td class="py-4 text-center">
                        {{ $producto->precio }}
                    </td>
                    <td class="py-4 mx-auto text-center">
                        {{ $producto->stock }}
                    </td>
                    <td class="py-4 text-center">
                        <a href="{{ route('productos.edit', $producto->slug) }}"
                            class="relative mx-3 inline-flex items-center justify-start px-5 py-3 overflow-hidden font-bold rounded-full group">
                            <span
                                class="w-32 h-32 rotate-45 translate-x-12 -translate-y-2 absolute left-0 top-0 bg-transparent dark:bg-white opacity-[3%]"></span>
                            <span
                                class="absolute top-0 left-0 w-48 h-48 -mt-1 transition-all duration-500 ease-in-out rotate-45 -translate-x-56 -translate-y-24 bg-blue-500 dark:bg-gray-300  opacity-100 group-hover:-translate-x-8"></span>
                            <span
                                class="relative w-full text-left text-blue-500 dark:text-white  transition-colors duration-200 ease-in-out group-hover:text-white dark:group-hover:text-gray-900">Actualizar</span>
                            <span
                                class="absolute inset-0 border-2 border-blue-500 dark:border-gray-700 rounded-full"></span>
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
                                <span
                                    class="absolute inset-0 border-2 border-red-400 dark:border-gray-700 rounded-full"></span>
                            </button>
                        </form>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
