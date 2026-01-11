<?php

namespace Database\Seeders;

use App\Models\BusinessAddress;
use App\Models\Client;
use App\Models\Invoice;
use App\Models\InvoiceItem;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class InvoiceSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Read JSON
        $json = File::get(database_path('seeders/data.json'));
        $invoices = json_decode($json, true);

        // 2. Create default business address
        $business = BusinessAddress::firstOrCreate([
            'street_address' => '19 Union Terrace',
            'post_code' => 'E1 3EZ',
            'city' => 'London',
            'country' => 'United Kingdom'
        ]);

        foreach ($invoices as $inv) {
            // 3. Create or get client
            $client = Client::firstOrCreate([
                'email' => $inv['clientEmail']
            ], [
                'name' => $inv['clientName'],
                'street_address' => $inv['clientAddress']['street'],
                'post_code' => $inv['clientAddress']['postCode'],
                'city' => $inv['clientAddress']['city'],
                'country' => $inv['clientAddress']['country'],
            ]);

            // 4. Create invoice
            $invoice = Invoice::create([
                'invoice_number' => $inv['id'],
                'client_id' => $client->id,
                'business_address_id' => $business->id,
                'project_description' => $inv['description'],
                'created_at' => $inv['createdAt'],
                'payment_due' => $inv['paymentDue'],
                'payment_terms' => $inv['paymentTerms'],
                'status' => $inv['status'],
            ]);

            // 5. Create invoice items
            foreach ($inv['items'] as $item) {
                InvoiceItem::create([
                    'invoice_id' => $invoice->id,
                    'name' => $item['name'],
                    'quantity' => $item['quantity'],
                    'price' => $item['price'],
                    'total' => $item['total'],
                ]);
            }
        }
    }
}
