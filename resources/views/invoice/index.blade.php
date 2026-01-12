<x-layout.layout>
    <x-layout.header />
    <section class=" mx-auto w-full px-20 py-15">
        <div class="invoice-filters flex justify-between">
            <div class="left">
                <p class="font-bold text-4xl text-dark-900 ">Invoice</p>
                <p class="font-medium text-[13px] leading-4 text-text-secondary ">There are 7 total invoices</p>
            </div>

            <div class="right flex gap-10 items-center ">
                <div class="filter flex gap-4 items-center">
                    <p class="font-bold text-base text-dark-900 leading-4">Filter by status</p>
                    <img class="h-3" src="{{ Vite::asset('resources/images/icon-arrow-down.svg') }}"
                        alt="down arrow icon">
                </div>
                <div class="cta">
                    <x-ui.button class="flex items-center hover:cursor-pointer">
                        <span class="w-8 h-8 inline-block rounded-full bg-white text-primary">+</span>
                        New Invoice
                    </x-ui.button>
                </div>
            </div>
        </div>
    </section>
</x-layout.layout>
