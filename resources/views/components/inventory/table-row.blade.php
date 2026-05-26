@props(['kode'=>'-','nama'=>'-','deskripsi'=>'-','harga'=>'-','jumlah'=>'-'])

<tr class="h-11">
    @foreach ([$kode,$nama,$deskripsi,$harga,$jumlah] as $val)
    <td class="bg-general-secondary border-r border-b border-table-border-color text-center text-general-secondary-text text-size-5 font-normal font-wix px-4 whitespace-nowrap">
        {{ $val }}
    </td>
    @endforeach
    <td class="bg-general-secondary border-b border-table-border-color px-2">
        <div class="flex justify-center items-center gap-1.5">
            <x-ui.button variant="accent" size="sm">Edit</x-ui.button>
            <x-ui.button variant="danger"  size="sm">Hapus</x-ui.button>
        </div>
    </td>
</tr>
