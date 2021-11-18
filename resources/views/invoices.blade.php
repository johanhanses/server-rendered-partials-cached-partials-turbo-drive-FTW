<x-app>
    <div class="relative rounded overflow-hidden">
        @if ($cachedInvoicesPartial)
            {!! $cachedInvoicesPartial !!}
        @else
            <include-fragment src="/partials/invoices">
                <x-invoices-placeholder/>
            </include-fragment>
        @endif
    </div>
</x-app>
