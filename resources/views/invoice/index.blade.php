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
        <div class="invoice-area pt-20 flex flex-col gap-4">
            @foreach ($invoiceData as $invoice)
                <x-ui.single-row-invoice :invoice_number="$invoice->invoice_number" :client_name="$invoice->client->name" :due_date="$invoice->payment_due->format('d M Y')" :total_amount="'£ ' . number_format($invoice->invoiceItems->sum('total'), 2)"
                    :status="$invoice->status" />
            @endforeach
        </div>



    </section>
</x-layout.layout>
