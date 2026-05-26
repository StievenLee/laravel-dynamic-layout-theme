{{--
    Halaman Kasir Utama
    ─────────────────────────────────────────────
    Untuk ganti tema : ubah prop `theme`
    Untuk ganti layout: ganti <x-layouts.cashier> 
                        dengan layout lain
    ─────────────────────────────────────────────
--}}

<x-layouts.cashier
    theme="theme-retro"
    store-name="Warung"
    store-subtitle="kasiro"
>

    {{-- ══════════════════════════════════════
         SIDEBAR — Nav Items
    ══════════════════════════════════════ --}}
    <x-slot:sidebar>
        <x-ui.button variant="accent" class="self-stretch w-full" href="{{ route('index') }}">
            Dashboard
        </x-ui.button>
        <x-ui.button variant="primary" class="self-stretch w-full" href="{{ route('inventory') }}">
            Barang & Stok
        </x-ui.button>
        <x-ui.button variant="primary" class="self-stretch w-full">
            Laporan
        </x-ui.button>
    </x-slot:sidebar>


    {{-- ══════════════════════════════════════
         CONTENT — Toolbar + Product Grid
    ══════════════════════════════════════ --}}
    <x-slot:content>

        {{-- Toolbar: filter kategori + search --}}
        <div class="flex items-center gap-[5px] flex-wrap mb-5">
            <x-ui.button variant="accent"    size="md">Semua</x-ui.button>
            <x-ui.button variant="secondary" size="md">Makanan</x-ui.button>
            <x-ui.button variant="secondary" size="md">Minuman</x-ui.button>
            <x-ui.input
                placeholder="Cari produk..."
                class="flex-1 min-w-72"
            />
        </div>

        {{-- Product Grid --}}
        <div class="flex flex-wrap gap-2 justify-center content-start">

            {{-- Nanti diganti @foreach($products as $product) --}}
            <x-cashier.product-card name="Nasi Goreng"  price="Rp 15.000" />
            <x-cashier.product-card name="Mie Ayam"     price="Rp 12.000" />
            <x-cashier.product-card name="Es Teh Manis" price="Rp 5.000"  />
            <x-cashier.product-card name="Ayam Bakar"   price="Rp 20.000" />
            <x-cashier.product-card name="Jus Alpukat"  price="Rp 10.000" />
            <x-cashier.product-card name="Soto Ayam"    price="Rp 13.000" />

        </div>

    </x-slot:content>


    {{-- ══════════════════════════════════════
         CART — Keranjang Belanja
    ══════════════════════════════════════ --}}
    <x-slot:cart>
        <x-cashier.cart-wrapper total="Rp 50.000">

            {{-- Nanti diganti @foreach($cartItems as $item) --}}
            <x-cashier.cart-item name="Nasi Goreng"  price="Rp 15.000" qty="2" />
            <x-cashier.cart-item name="Es Teh Manis" price="Rp 5.000"  qty="4" />
            <x-cashier.cart-item name="Ayam Bakar"   price="Rp 20.000" qty="1" />
            <x-cashier.cart-item name="Ayam Goreng"  price="Rp 22.000" qty="2" />

        </x-cashier.cart-wrapper>
    </x-slot:cart>

</x-layouts.cashier>