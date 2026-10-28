@php

    $items = [
        ['label' => 'Home', 'url' => '#'],
        ['label' => 'Sobre mi', 'url' => '#'],
        ['label' => 'Contacto', 'url' => '#'],
    ];

@endphp

<nav class="mx-auto w-full h-25 bg-surface shadow-2xs mb-2 p-4">
    <div class="w-full h-full flex flex-row justify-between items-center">
        <div class="flex flex-row items-center justify-center gap-6 text-primary-foreground ">
            @foreach ($items as $item)
                <a href="{{ $item['url'] }}"
                    class="hover:text-black transition-transform hover:scale-115 duration-300 ease-in-out">{{ $item['label'] }}</a>
            @endforeach
        </div>
    </div>
</nav>
