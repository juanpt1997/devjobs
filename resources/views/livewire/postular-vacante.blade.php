<div class="bg-gray-100 p-5 mt-10 flex flex-col justify-center items-center">
    {{-- Care about people's approval and you will be their prisoner. --}}

    <h3 class="text-center text-2xl font-bold my-4">
        Posultarme a esta vacante
    </h3>

    @if (session()->has('mensaje'))
        <p class="uppercase border border-green-600 bg-green-100 text-green-600 font-bold p-2 my-5 text-sm rounded-lg">
            {{ session('mensaje') }}
        </p>
    @else
        <form class="w-96 mt-5" wire:submit.prevent='postularme'>
            <div class="mb-4">
                <x-label for="cv" :value="__('Curriculum u Hoja de vida (PDF)')"></x-label>
                <x-input id="cv" type="file" wire:model="cv" accept=".pdf" class="block mt-1 w-full"></x-input>
            </div>

            @error('cv')
                <livewire:mostrar-alerta :message="$message">
            @enderror

            <x-button class="my-5">
                {{ __('Postularme') }}
            </x-button>
        </form>
    @endif

</div>
