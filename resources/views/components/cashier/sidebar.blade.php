{{--
    Sidebar Component
    ─────────────────────────────────────────────
    Props:
      storeName     : nama toko (default: "Warung")
      storeSubtitle : subtitle toko (default: "kasiro")
    Slots:
      $slot (default) : nav items / buttons
    ─────────────────────────────────────────────
    Semua visual diambil dari CSS variable theme aktif.
--}}

@props([
    'storeName'     => 'Warung',
    'storeSubtitle' => 'kasiro',
])

<aside class="w-80 h-full bg-general-secondary
              inline-flex flex-col justify-start items-start
              overflow-hidden shrink-0">


    
    {{-- ── Header / Logo ── --}}
    <div class="self-stretch px-6 py-14 bg-general-secondary inline-flex flex-col justify-start items-start">
        <div class="text-general-secondary-text text-size-1 font-normal font-wix [text-shadow:_1px_1px_0px_rgb(0_0_0_/_0.25)]">
            {{ $storeName }}
        </div>
        <div class="ml-2 text-general-secondary-text text-size-3 leading-0 font-normal font-wix [text-shadow:_1px_1px_0px_rgb(0_0_0_/_0.25)]">
            {{ $storeSubtitle }}
        </div>
    </div>

    {{-- ── Nav Items ── --}}
    <div class="self-stretch flex-1 px-5 flex flex-col justify-start items-center gap-[5px]">
        {{ $slot }}
    </div>

</aside>