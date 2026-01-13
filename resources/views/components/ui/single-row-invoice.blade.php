@props(['invoice_number', 'due_date', 'client_name', 'total_amount', 'status'])


<div class="content bg-white shadow px-6 py-4 rounded-lg">
    <div class="invoice flex items-center gap-4 justify-between">
        <div class=" flex gap-6 flex-col md:flex-row space-y-3 md:space-x-0 md:items-center">
            <p class="invoice-id font-bold text-base leading-4 text-dark-900 "><span
                    class="text-text-muted">#</span>{{ $invoice_number }}
            </p>
            <p class="date text-[13px] leading-4 font-medium text-text-muted">due date {{ $due_date }}</p>
        </div>
        <div class="flex flex-col md:flex-row gap-6 space-y-3 md:space-x-0 md:items-center">
            <p class="client text-[13px] leading-4 font-medium text-text-muted">{{ $client_name }}</p>
            <p class="amount text-base text-dark-900 leading-6 font-bold">{{ $total_amount }}</p>
        </div>
        <x-ui.status :status="$status" />
    </div>
</div>
