    <x-layout.layout>


        <section class="mx-auto md:w-[80%] px-6 md:px-10 pb-15">
            <div class="invoice-filters flex justify-between">
                <div class="left">
                    <p class="font-bold text-2xl md:text-4xl text-dark-900 ">Invoice</p>
                    <p class="font-medium text-[13px] hidden md:block leading-4 text-text-secondary ">There are 7 total
                        invoices</p>
                    <p class="font-medium text-[13px] block md:hidden leading-4 text-text-secondary "> 7 invoices</p>
                </div>

                <div class="right flex gap-10 items-center ">
                    <div class="filter flex gap-4 items-center">
                        <p class="font-bold hidden md:block text-base text-dark-900 leading-4">Filter by status</p>
                        <p class="font-bold block md:hidden text-[13px] text-dark-900 leading-4">Filter</p>
                        <img class="h-3" src="{{ Vite::asset('resources/images/icon-arrow-down.svg') }}"
                            alt="down arrow icon">
                    </div>
                    <div class="cta">
                        <x-ui.button class="flex items-center gap-2  md:gap-3 hover:cursor-pointer rounded-full">
                            <div class="bg-white w-8 h-8 rounded-full flex justify-center items-center">
                                <img class="w-4 h-4" src="{{ Vite::asset('resources/images/icon-plus.svg') }}"
                                    alt="plus icon">
                            </div>
                            <p class="hidden md:block">New Invoice</p>
                            <p class="block md:hidden">New</p>
                        </x-ui.button>
                    </div>
                </div>
            </div>
            <div class="invoice-area pt-10 md:pt-20 flex flex-col gap-4">
                @foreach ($invoiceData as $invoice)
                    <x-ui.single-row-invoice :invoice_number="$invoice->invoice_number" :client_name="$invoice->client->name" :due_date="$invoice->payment_due->format('d M Y')" :total_amount="'£ ' . number_format($invoice->invoiceItems->sum('total'), 2)"
                        :status="$invoice->status" />
                @endforeach
            </div>
        </section>
    </x-layout.layout>
