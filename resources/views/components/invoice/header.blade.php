@props(['title'])
<section>
    <div class="flex items-center gap-6 pb-6">
        <div class="">
            <img class="w-3 h-4" src="{{ Vite::asset('resources/images/icon-arrow-left.svg') }}" alt="left arrow icon">
        </div>
        <p class="text-[15px] font-medium text-dark-900">Go back</p>
    </div>
    <p class="font-bold text-2xl leading-8 text-dark-900">{{ $title }}</p>
</section>
