<x-layout.layout>
    <section class="px-6 pt-6 md:w-[40%] pb-20">
        <x-invoice.header title="New Invoice" />
        <div class="sender py-3">
            <p class=" py-6 text-base font-bold leading-4 text-[#7C5DFA] ">Bill Form</p>
            <x-invoice.sender-address />
        </div>

        <div class="client py-3">
            <p class=" py-6 text-base font-bold leading-4 text-[#7C5DFA] ">Bill To</p>
            <x-invoice.client-details />
        </div>
        <div class="invoice-terms py-3">
            {{-- <p class=" py-6 text-base font-bold leading-4 text-[#7C5DFA] ">Bill To</p> --}}
            <x-invoice.invoice-terms />
        </div>
        <div class="items-list py-3">
            <x-invoice.items-list />
        </div>
    </section>
</x-layout.layout>
