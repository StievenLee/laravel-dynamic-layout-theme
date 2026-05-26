{{--
    Product Card Component
    ─────────────────────────────────────────────
    Props:
      name  : nama produk
      price : harga produk (string, misal "Rp 15.000")
      image : URL gambar (opsional)
    ─────────────────────────────────────────────
    Semua visual diambil dari CSS variable theme aktif.
--}}

@props([
    'name'  => 'Nama Produk',
    'price' => 'Rp 0',
    'image' => null,
])

<div class="w-44 h-72 inline-flex flex-col">
    <div class="self-stretch flex-1
                bg-general-secondary
                border-r border-b border-card-border-color
                shadow-[var(--card-inner-shadow)]
                rounded-[var(--card-border-radius)]
                p-[var(--card-padding-top)]
                flex flex-col justify-center items-center gap-2
                cursor-pointer hover:bg-general-accent transition-colors">

        {{-- Gambar Produk --}}
        <div class="w-full flex-1 bg-general-primary flex items-center justify-center overflow-hidden">
            @if($image)
                <img src="{{ $image }}" alt="{{ $name }}" class="w-full h-full object-cover" />
            @else
                <span class="text-general-primary-text text-size-6 opacity-40 font-wix">
                    No Image
                </span>
            @endif
        </div>

        {{-- Info Produk --}}
        <div class="w-full flex flex-col gap-0.5">
            <p class="text-general-secondary-text font-wix text-size-6 truncate font-semibold">
                {{ $name }}
            </p>
            <p class="text-general-gray-2 font-wix text-size-6">
                {{ $price }}
            </p>
        </div>

    </div>
</div>