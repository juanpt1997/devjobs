{{-- ? Asi funcionaba pero vamos a utilizar las variables que existen en los componentes de laravel --}}
{{-- <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ $href }}">
    {{ $slot }}
</a> --}}

@php
    $classes = "text-xs text-gray-500 hover:text-gray-900";
@endphp
<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
{{-- ? con attributes el detecta automaticamente el href como un atributo --}}
{{-- ? Los de class si le digo manualmente como lo puede encontrar --}}
