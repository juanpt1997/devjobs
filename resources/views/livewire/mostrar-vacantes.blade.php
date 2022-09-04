<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

    @foreach ($vacantes as $vacante)
        <div class="p-6 bg-white border-b border-gray-200 md:flex md:justify-between md:items-center">
            <div class="space-y-3">
                <a href="#" class="text-xl font-bold">
                    {{ $vacante->titulo }}
                </a>
                <p class="text-sm text-gray-600 font-bold">{{ $vacante->empresa }}</p>
                <p class="text-sm text-gray-500">Último día: {{ $vacante->ultimo_dia->format('d/m/Y') }}</p>
            </div>

            <div class="gap-3 flex flex-col items-stretch mt-5 md:flex-row md:mt-0">
                <a href="#" class="bg-slate-800 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center">
                    Candidatos
                </a>
                <a href="#" class="bg-blue-800 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center">
                    Editar
                </a>
                <a href="#" class="bg-red-600 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center">
                    Eliminar
                </a>
            </div>
        </div>

    @endforeach
</div>