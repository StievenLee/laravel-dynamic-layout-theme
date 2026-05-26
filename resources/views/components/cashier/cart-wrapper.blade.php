{{--
    Cart Wrapper Component
    ─────────────────────────────────────────────
    Props:
      total : total harga (string, misal "Rp 50.000")
    Slots:
      $slot (default) : list cart items
    ─────────────────────────────────────────────
    Semua visual diambil dari CSS variable theme aktif.
--}}

@props([
    'total' => 'Rp 0',
])

<div class="flex flex-col h-full">

    {{-- ── Header ── --}}
    <div class="h-24 px-8 flex justify-center items-center flex-shrink-0
                border-b border-general-primary">
        <span class="text-general-secondary-text font-wix text-size-1
                     [text-shadow:_1px_1px_0px_rgb(0_0_0_/_0.25)]">
            Keranjang
        </span>
    </div>

    {{-- ── List Items (scrollable) ── --}}
    <div class="flex-1 px-5 py-2.5 flex flex-col gap-2.5 overflow-y-auto">
        {{ $slot }}
    </div>

    {{-- ── Footer Total ── --}}
    <div class="h-40 px-5 py-5 relative flex-shrink-0
                bg-general-secondary
                border-t border-general-primary">

        <p class="text-general-secondary-text font-wix text-size-4">
            TOTAL
        </p>
        <p class="text-general-secondary-text font-wix text-size-1">
            {{ $total }}
        </p>

        <div class="absolute bottom-5 right-5">
            <x-ui.button variant="primary" size="md">
                Bayar
            </x-ui.button>
        </div>

    </div>

</div>