<div class="bg-gray-100 p-5 mt-10 flex flex-col justify-center items-center">
    {{-- Care about people's approval and you will be their prisoner. --}}

    <h3 class="text-center text-2xl font-bold my-4">
        Posultarme a esta vacante
    </h3>

    <form class="w-96 mt-5">
        <div class="mb-4">
            <x-label for="cv" :value="__('Curriculum u Hoja de vida (PDF)')"></x-label>
            <x-input id="cv" type="file" accept=".pdf" class="block mt-1 w-full"></x-input>
        </div>
    </form>
</div>
