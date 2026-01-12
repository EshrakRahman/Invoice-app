<button
    {{ $attributes->merge([
        'class' =>
            'text-base font-bold leading-4 tracking-tight h-10 w-90  py-3.5 bg-[#F9FAFE] hover:bg-[#DFE3FA] text-white rounded-2xl hover:cursor-pointer ',
    ]) }}>
    {{ $slot }}
</button>
