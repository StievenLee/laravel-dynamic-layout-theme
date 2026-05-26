<div class="flex-1 min-h-0 rounded-2xl overflow-hidden border border-table-border-color">
    <div class="w-full h-full overflow-auto">
        <table class="w-full border-separate border-spacing-0">
            <thead class="sticky top-0 z-10">
            <tr>
                @foreach (['Kode','Nama','Deskripsi','Harga','Jumlah Barang','Aksi'] as $col)
                <th class="h-12 bg-general-accent border-r border-b border-table-border-color last:border-r-0 text-general-accent-text text-size-5 font-bold font-wix capitalize px-4 whitespace-nowrap">
                    {{ $col }}
                </th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            {{ $slot }}
        </tbody>
        </table>
    </div>
</div>