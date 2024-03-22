{{-- resources/views/contactos/index.blade.php --}}
@vite('resources/js/app.js') @vite('resources/css/app.css')


@if(session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
        <strong class="font-bold">Éxito!</strong>
        <span class="block sm:inline">{{ session('success') }}</span>
    </div>
@endif

<div class="shadow-lg rounded-lg overflow-hidden mx-4 md:mx-auto">
    <table class="w-full table-fixed">
        <thead>
            <tr class="bg-gray-100">
                <th class="py-4 px-6 text-left text-gray-600 font-bold uppercase">Nombre</th>
                <th class="py-4 px-6 text-left text-gray-600 font-bold uppercase">Correo Electrónico</th>
                <th class="py-4 px-6 text-left text-gray-600 font-bold uppercase">Teléfono</th>
                <th class="py-4 px-6 text-left text-gray-600 font-bold uppercase">Empresa</th>
            </tr>
        </thead>
        <tbody class="bg-white">
            @forelse ($contactos as $contacto)
                <tr>
                    <td class="py-4 px-6 border-b border-gray-200">{{ $contacto->nombre }}</td>
                    <td class="py-4 px-6 border-b border-gray-200">{{ $contacto->correo_electronico }}</td>
                    <td class="py-4 px-6 border-b border-gray-200">{{ $contacto->telefono }}</td>
                    <td class="py-4 px-6 border-b border-gray-200">{{ $contacto->empresa }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="py-4 px-6 border-b border-gray-200 text-center">No hay contactos disponibles</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
