@vite('resources/js/app.js') @vite('resources/css/app.css')


<div class="min-h-screen bg-gray-800 py-6 flex flex-col justify-center sm:py-12">
    <div class="relative py-3 sm:max-w-xl sm:mx-auto">
        <div class="absolute inset-0 bg-gradient-to-r from-indigo-700 to-purple-500 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl"></div>
        <div class="relative px-4 py-10 bg-white shadow-lg sm:rounded-3xl sm:p-20">
            <div class="max-w-md mx-auto">
                <div class="text-center pb-6">
                    <h1 class="text-2xl font-bold text-gray-900">Agregar Contacto</h1>
                    <p class="text-sm text-gray-600">
                        Usa el formulario para añadir un nuevo contacto.
                    </p>
                </div>
                <form action="{{ route('contactos.store') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" placeholder="Nombre" name="nombre" required>
                    </div>
                    <div class="mb-4">
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="email" placeholder="Correo Electrónico" name="correo_electronico" required>
                    </div>
                    <div class="mb-4">
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="tel" placeholder="Teléfono" name="telefono">
                    </div>
                    <div class="mb-4">
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" placeholder="Empresa" name="empresa">
                    </div>
                    <div class="flex items-center justify-between">
                        <button class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">Agregar</button>
                        <button class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="reset">Limpiar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
