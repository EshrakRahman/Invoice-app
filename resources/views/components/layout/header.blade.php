<header
    class="bg-dark-500 flex justify-between px-6 py-8 lg:fixed top-0 left-0 lg:h-screen lg:w-24 lg:flex-col lg:rounded-r-3xl">
    <div class="logo">
        <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="logo">
    </div>
    <div class="profile flex items-center gap-5 lg:flex-col">
        <div class="">
            <img src="{{ Vite::asset('resources/images/icon-moon.svg') }}" alt="moon icon">
        </div>
        <span class="inline-block h-full w-0.5 lg:w-full lg:h-0.5 bg-dark-400 "></span>
        <div class="w-8">
            <img class="rounded-full" src="{{ Vite::asset('resources/images/image-avatar.jpg') }}" alt="profile avatar">
        </div>
    </div>
</header>
