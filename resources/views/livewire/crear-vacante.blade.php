<form class="md:w-1/2 space-y-5">
    {{-- Título vacante --}}
    <div>
        <x-label for="titulo" :value="__('Título Vacante')" />
        <x-input id="titulo" class="block mt-1 w-full" type="text" name="titulo" :value="old('titulo')"
            placeholder="Título Vacante" />
    </div>

    {{-- Salario Mensual --}}
    <div>
        <x-label for="salario" :value="__('Salario Mensual')" />
        <select name="salario" id="salario"
            class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full">
            <option value="">-- Seleccione --</option>
            @foreach ($salarios as $salario)
                <option value="{{ $salario->id }}">{{ $salario->salario }}</option>
            @endforeach
        </select>
    </div>

    {{-- Categoría --}}
    <div>
        <x-label for="categoria" :value="__('Categoría')" />
        <select name="categoria" id="categoria"
            class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full">
        </select>
    </div>

    {{-- Empresa --}}
    <div>
        <x-label for="empresa" :value="__('Empresa')" />
        <x-input id="empresa" class="block mt-1 w-full" type="text" name="empresa" :value="old('empresa')"
            placeholder="Empresa: ej. Netflix, Uber, Shopify" />
    </div>

    {{-- Último día para postularse --}}
    <div>
        <x-label for="ultimo_dia" :value="__('Último día para postularse')" />
        <x-input id="ultimo_dia" class="block mt-1 w-full" type="date" name="ultimo_dia" :value="old('empresa')" />
    </div>
    
    {{-- Descripción Puesto --}}
    <div>
        <x-label for="descripcion" :value="__('Descripción Puesto')" />
        <textarea name="descripcion" id="descripcion" cols="30" rows="5" placeholder="Descripción general del puesto, experiencia" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full"></textarea>
    </div>

    {{-- Imagen --}}
    <div>
        <x-label for="imagen" :value="__('Imagen')" />
        <x-input id="imagen" class="block mt-1 w-full" type="file" name="imagen" />
    </div>

    {{-- Submit, crear vacante --}}
    <x-button>
        Crear Vacante
    </x-button>
</form>
