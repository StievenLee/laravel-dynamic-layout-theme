{{--
    Cart Item Component
    ─────────────────────────────────────────────
    Props:
      name  : nama produk
      price : harga satuan (string)
      qty   : jumlah item
    ─────────────────────────────────────────────
    Semua visual diambil dari CSS variable theme aktif.
--}}

@props([
    'name'  => 'Nama Produk',
    'price' => 'Rp 0',
    'qty'   => 1,
])

<div class="self-stretch h-24 flex flex-col flex-shrink-0">
    <div class="flex-1
                bg-general-primary
                border-r border-b border-card-border-color
                shadow-[var(--card-inner-shadow)]
                rounded-[var(--card-border-radius)]
                p-[var(--card-padding-top)]
                flex flex-col justify-center gap-1">

        {{-- Nama --}}
        <p class="text-general-primary-text font-wix text-size-5 truncate">
            {{ $name }}
        </p>

        {{-- Harga & Qty --}}
        <div class="flex justify-between items-center">
            <span class="text-general-gray-2 font-wix text-size-6">
                {{ $price }}
            </span>
            <span class="text-general-primary-text font-wix text-size-6
                         bg-general-accent px-2 py-0.5">
                x{{ $qty }}
            </span>
        </div>

    </div>
</div>