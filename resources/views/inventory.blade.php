{{--
    Halaman Inventory
    ─────────────────────────────────────────────
    Untuk ganti tema : ubah prop `theme`
    Untuk ganti layout: ganti <x-layouts.cashier>
                        dengan layout lain
    ─────────────────────────────────────────────
--}}

<x-layouts.inventory
    theme="theme-modern"
    store-name="Warung"
    store-subtitle="kasiro"
>

    {{-- ══════════════════════════════════════
         SIDEBAR — Nav Items
    ══════════════════════════════════════ --}}
    <x-slot:sidebar>
        <x-ui.button variant="primary" class="self-stretch w-full" href="{{ route('index') }}">
            Dashboard
        </x-ui.button>
        <x-ui.button variant="accent" class="self-stretch w-full" href="{{ route('inventory') }}">
            Barang & Stok
        </x-ui.button>
        <x-ui.button variant="primary" class="self-stretch w-full">
            Laporan
        </x-ui.button>
    </x-slot:sidebar>


    {{-- ══════════════════════════════════════
         CONTENT — Header + Filter + Table
    ══════════════════════════════════════ --}}
    <x-slot:content>
        <div class="flex-1 min-h-0 flex flex-col gap-5 px-6 pt-11 pb-2.5 overflow-hidden">

            {{-- Header: judul + tombol aksi --}}
            <div class="flex justify-between items-center flex-shrink-0">
                <h1 class="text-general-primary-text text-size-3 font-normal font-wix">BARANG & STOK</h1>
                <div class="flex items-center gap-1.5">
                    <x-ui.button variant="accent">Ekspor</x-ui.button>
                    <x-ui.button variant="secondary">Tambah Barang</x-ui.button>
                </div>
            </div>

            {{-- Filter: kategori + search --}}
            <div class="flex items-center gap-[5px] flex-wrap flex-shrink-0">
                <x-ui.button variant="accent">All</x-ui.button>
                <x-ui.button variant="secondary">Barang</x-ui.button>
                <x-ui.button variant="secondary">Makanan</x-ui.button>
                <x-ui.button variant="secondary">Minuman</x-ui.button>
                <x-ui.input placeholder="Cari Barang" class="flex-1 min-w-72" />
            </div>

            {{-- Tabel Inventory --}}
            <x-inventory.table>
                <x-inventory.table-row kode="BRG-001" nama="Nasi Goreng"  deskripsi="Nasi goreng special"  harga="Rp 15.000" jumlah="50"  />
                <x-inventory.table-row kode="BRG-002" nama="Mie Ayam"     deskripsi="Mie ayam bakso"       harga="Rp 12.000" jumlah="35"  />
                <x-inventory.table-row kode="MIN-001" nama="Es Teh Manis" deskripsi="Teh manis dingin"     harga="Rp 5.000"  jumlah="100" />
                <x-inventory.table-row kode="MKN-001" nama="Ayam Bakar"   deskripsi="Ayam bakar kecap"     harga="Rp 20.000" jumlah="20"  />
                <x-inventory.table-row kode="MIN-002" nama="Jus Alpukat"  deskripsi="Jus alpukat segar"    harga="Rp 10.000" jumlah="15"  />
                <x-inventory.table-row kode="MKN-002" nama="Soto Ayam"    deskripsi="Soto ayam kuning"     harga="Rp 13.000" jumlah="40"  />
                <x-inventory.table-row kode="MKN-002" nama="Soto Ayam"    deskripsi="Soto ayam kuning"     harga="Rp 13.000" jumlah="40"  />
                <x-inventory.table-row kode="MKN-002" nama="Soto Ayam"    deskripsi="Soto ayam kuning"     harga="Rp 13.000" jumlah="40"  />
                <x-inventory.table-row kode="MKN-002" nama="Soto Ayam"    deskripsi="Soto ayam kuning"     harga="Rp 13.000" jumlah="40"  />
                <x-inventory.table-row kode="MKN-002" nama="Soto Ayam"    deskripsi="Soto ayam kuning"     harga="Rp 13.000" jumlah="40"  />
                <x-inventory.table-row kode="MKN-002" nama="Soto Ayam"    deskripsi="Soto ayam kuning"     harga="Rp 13.000" jumlah="40"  />
                <x-inventory.table-row kode="MKN-002" nama="Soto Ayam"    deskripsi="Soto ayam kuning"     harga="Rp 13.000" jumlah="40"  />
                <x-inventory.table-row kode="MKN-002" nama="Soto Ayam"    deskripsi="Soto ayam kuning"     harga="Rp 13.000" jumlah="40"  />
            </x-inventory.table>

        </div>
    </x-slot:content>


    {{-- ══════════════════════════════════════
         ADD ITEM — Panel Tambah Barang
    ══════════════════════════════════════ --}}
    <x-slot:addItem>
        <x-inventory.add-item />
    </x-slot:addItem>

</x-layouts.inventory>
