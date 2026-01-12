<button
    {{ $attributes->merge([
        'class' => 'text-base font-bold leading-4 tracking-tight px-5 py-3.5 bg-primary text-white rounded-2xl ',
    ]) }}>
    {{ $slot }}
</button>
