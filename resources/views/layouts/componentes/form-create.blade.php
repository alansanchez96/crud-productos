<div class="w-full max-w-prose mx-auto">
    <form class="bg-gray-100 dark:bg-stone-800 shadow-md rounded px-8 pt-6 pb-8 mb-4" method="post"
        action="{{ route('productos.store') }}">
        @csrf
        <div class="relative z-0 mb-6 w-full group">
            <input type="text" name="producto" id="producto" value="{{ old('producto') }}"
                class="transition-colors duration-500 ease-in-out block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-blue-500 appearance-none dark:text-white dark:border-gray-200 dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-blue-700 peer"
                placeholder=" ">
            <label for="producto"
                class="peer-focus:font-medium absolute text-sm text-gray-400 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-700 peer-focus:dark:text-gray-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nombre
                del producto</label>
        </div>
        <div class="relative z-0 mb-6 w-full group">
            <input type="number" name="precio" id="precio" value="{{ old('precio') }}"
                class="transition-colors duration-500 ease-in-out block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-blue-500 appearance-none dark:text-white dark:border-gray-200 dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-blue-700 peer"
                placeholder=" ">
            <label for="precio"
                class="peer-focus:font-medium absolute text-sm text-gray-400 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-700 peer-focus:dark:text-gray-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Precio
                del producto</label>
        </div>
        <div class="relative z-0 mb-6 w-full group">
            <input type="number" name="stock" id="stock" value="{{ old('stock') }}"
                class="transition-colors duration-500 ease-in-out block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-blue-500 appearance-none dark:text-white dark:border-gray-200 dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-blue-700 peer"
                placeholder=" ">
            <label for="stock"
                class="peer-focus:font-medium absolute text-sm text-gray-400 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-700 peer-focus:dark:text-gray-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Stock</label>
        </div>
        <div class="relative z-0 mb-6 w-full group">
            <textarea name="descripcion" id="descripcion"
                class="transition-colors duration-500 ease-in-out block py-2.5 px-0 w-full h-36 text-sm text-gray-500 bg-transparent border-0 border-b-2 border-blue-500 appearance-none dark:text-white dark:border-gray-200 dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-blue-700 peer"
                placeholder=" ">{{ old('descripcion') }}</textarea>
            <label for="descripcion"
                class="peer-focus:font-medium absolute text-sm text-gray-400 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-700 peer-focus:dark:text-gray-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Descripcion</label>
        </div>
        <div class="flex items-center justify-between">
            <button
                class="relative mx-3 inline-flex items-center justify-start px-5 py-3 overflow-hidden font-bold rounded-full group">
                <span
                    class="w-32 h-32 rotate-45 translate-x-12 -translate-y-2 absolute left-0 top-0 bg-transparent dark:bg-white opacity-[3%]"></span>
                <span
                    class="absolute top-0 left-0 w-48 h-48 -mt-1 transition-all duration-500 ease-in-out rotate-45 -translate-x-56 -translate-y-24 bg-blue-500 dark:bg-gray-300  opacity-100 group-hover:-translate-x-8"></span>
                <span
                    class="relative w-full text-left text-blue-500 dark:text-white  transition-colors duration-200 ease-in-out group-hover:text-white dark:group-hover:text-gray-900">Crear Producto</span>
                <span class="absolute inset-0 border-2 border-blue-500 dark:border-gray-700 rounded-full"></span>
            </button>
        </div>
    </form>
</div>
