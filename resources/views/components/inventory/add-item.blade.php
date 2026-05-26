<div class="h-full flex flex-col overflow-hidden bg-general-secondary">

    {{-- Title --}}
    <div class="shrink-0 px-5 py-9 flex justify-center items-center">
        <span class="text-general-secondary-text text-size-2 font-normal font-wix text-center">
            Tambah Barang
        </span>
    </div>

    {{-- Form --}}
    <div class="flex-1 px-5 pb-5 flex flex-col gap-4 overflow-auto">

        <div class="flex flex-col gap-1">
            <label class="text-general-secondary-text text-size-4 font-normal font-wix">
                Nama Barang <span class="text-red-600">*</span>
            </label>
            <x-ui.input placeholder="Isi nama" />
        </div>

        <div class="flex flex-col gap-1">
            <label class="text-general-secondary-text text-size-4 font-normal font-wix">
                Deskripsi (Optional)
            </label>
            <x-ui.input placeholder="Isi deskripsi" />
        </div>

        <div class="flex flex-col gap-1">
            <label class="text-general-secondary-text text-size-4 font-normal font-wix">
                Harga
            </label>
            <x-ui.input placeholder="12800" type="number" />
        </div>

        <div class="flex flex-col gap-1">
            <label class="text-general-secondary-text text-size-4 font-normal font-wix">
                Jumlah
            </label>
            <x-ui.input placeholder="3" type="number" />
        </div>

        <div class="flex flex-col gap-1">
            <label class="text-general-secondary-text text-size-4 font-normal font-wix">
                Foto (Optional)
            </label>
            <x-ui.input placeholder="Pilih foto" type="fill" />
        </div>

        <div class="flex justify-center pt-2">
            <x-ui.button variant="primary" size="md" class="w-full">
                Tambahkan Sekarang!
            </x-ui.button>
        </div>

    </div>

</div>
