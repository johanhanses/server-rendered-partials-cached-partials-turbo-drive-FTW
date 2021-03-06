<table class="bg-gray-100 w-full">
    @foreach($invoices as $invoice)
        <tr class="border-b">
            <td class="p-4">
                <div>
                    <span class="font-medium">{{ $invoice->title }}</span>
                    @if ($invoice->paid_at)
                        <span class="ml-2 bg-gray-300 font-semibold p-1 rounded text-gray-800">
                            Paid
                        </span>
                    @endif
                </div>
            </td>

            <td class="p-4 text-right font-mono font-semibold">
                <span>{{ $invoice->amount_in_cents }}</span>
            </td>

            <td class="p-4 text-right">
                <span class="text-blue-600">Download</span>
            </td>
        </tr>
    @endforeach
</table>
