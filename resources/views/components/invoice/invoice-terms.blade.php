<section class="sender flex flex-col gap-6">
    <x-ui.input-element label="Invoice Date" placeholder="19 Aug 2024" name="invoice_date" value="invoice_date"
        type="date" />

    @php
        $terms = [
            1 => 'Net 1 Day',
            7 => 'Net 7 Days',
            14 => 'Net 14 Days',
            30 => 'Net 30 Days',
        ];
    @endphp

    <x-ui.select label="Payment Terms" name="payment_terms" :options="$terms" />


    <x-ui.input-element label="Description" placeholder="Graphic Design" name="description" value="description" />
</section>
