<form class="md:w-1/2 space-y-5" wire:submit.prevent='crearVacante'>
    {{-- Título vacante --}}
    <div>
        <x-label for="titulo" :value="__('Título Vacante')" />
        <x-input id="titulo" class="block mt-1 w-full" type="text" wire:model="titulo" :value="old('titulo')"
            placeholder="Título Vacante" />

        @error('titulo')
            <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>

    {{-- Salario Mensual --}}
    <div>
        <x-label for="salario" :value="__('Salario Mensual')" />
        <select wire:model="salario" id="salario"
            class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full">
            <option value="">-- Seleccione --</option>
            @foreach ($salarios as $salario)
                <option value="{{ $salario->id }}">{{ $salario->salario }}</option>
            @endforeach
        </select>
        @error('salario')
            <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>

    {{-- Categoría --}}
    <div>
        <x-label for="categoria" :value="__('Categoría')" />
        <select wire:model="categoria" id="categoria"
            class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full">
            <option value="">-- Seleccione --</option>
            @foreach ($categorias as $categoria)
                <option value="{{ $categoria->id }}">{{ $categoria->categoria }}</option>
            @endforeach
        </select>
        @error('categoria')
            <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>

    {{-- Empresa --}}
    <div>
        <x-label for="empresa" :value="__('Empresa')" />
        <x-input id="empresa" class="block mt-1 w-full" type="text" wire:model="empresa" :value="old('empresa')"
            placeholder="Empresa: ej. Netflix, Uber, Shopify" />
        @error('empresa')
            <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>

    {{-- Último día para postularse --}}
    <div>
        <x-label for="ultimo_dia" :value="__('Último día para postularse')" />
        <x-input id="ultimo_dia" class="block mt-1 w-full" type="date" wire:model="ultimo_dia" :value="old('ultimo_dia')" />
        @error('ultimo_dia')
            <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>

    {{-- Descripción Puesto --}}
    <div>
        <x-label for="descripcion" :value="__('Descripción Puesto')" />
        <textarea wire:model="descripcion" id="descripcion" cols="30" rows="5"
            placeholder="Descripción general del puesto, experiencia"
            class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full"></textarea>
        @error('descripcion')
            <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>

    {{-- Imagen --}}
    <div>
        <x-label for="imagen" :value="__('Imagen')" />
        <x-input id="imagen" class="block mt-1 w-full" type="file" wire:model="imagen" accept='image/*' />
        {{-- ? Two way data binding --}}
        {{-- Envío datos al servidor pero también tengo una respuesta --}}
        <div class="my-5 w-80">
            @if($imagen)
                <img src="{{ $imagen->temporaryUrl() }}" alt="imagen">
            @endif
        </div>
        @error('imagen')
            <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>

    {{-- Submit, crear vacante --}}
    <x-button>
        Crear Vacante
    </x-button>
</form>
