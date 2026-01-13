@props(['status'])

<div class="flex items-center gap-3 status-button">
    <div class="status w-26 h-10 {{ $status->bg() }}/5 rounded-lg flex items-center justify-center">
        <div class="flex items-center gap-3">
            <div class="w-2.5 h-2.5 {{ $status->dot() }} rounded-full"></div>
            <p class="{{ $status->text() }} text-base leading-4">{{ $status->label() }}</p>
        </div>
    </div>
    <div class="hidden md:block">
        <img src="{{ Vite::asset('resources/images/icon-arrow-right.svg') }}" alt="arrow left icon">
    </div>
</div>
