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
                    <x-ui.button class="flex items-center  gap-3 hover:cursor-pointer rounded-full">
                        <div class="bg-white w-8 h-8 rounded-full flex justify-center items-center">
                            <img class="w-4 h-4" src="{{ Vite::asset('resources/images/icon-plus.svg') }}"
                                alt="plus icon">
                        </div>
                        <p>New Invoice</p>
                    </x-ui.button>
                </div>
            </div>
        </div>
        <div class="invoice-area pt-20">
            <div class="content bg-white shadow px-6 py-4 rounded-lg">
                <div class="invoice flex items-center gap-4 justify-between">
                    <p class="invoice-id font-bold text-base leading-4 text-dark-900 "><span
                            class="text-text-muted">#</span>RT3080</p>
                    <p class="date text-[13px] leading-4 font-medium text-text-muted">Due 19 Aug 2021</p>
                    <p class="client text-[13px] leading-4 font-medium text-text-muted">Jensen Huang</p>
                    <p class="amount text-base text-dark-900 leading-6 font-bold">£ 1,800.90</p>
                    <div class="flex items-center gap-3 status-button">
                        <div class="status w-26 h-10 bg-[#33D69F]/5 rounded-lg flex items-center justify-center">
                            <div class="flex items-center gap-3">
                                <div class="w-2.5 h-2.5 bg-[#33D69F] rounded-full"></div>
                                <p class="text-[#33D69F] text-base leading-4">Paid</p>
                            </div>
                        </div>
                        <div class="">
                            <img src="{{ Vite::asset('resources/images/icon-arrow-right.svg') }}" alt="arrow left icon">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout.layout>
