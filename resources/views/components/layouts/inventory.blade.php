{{--
    Layout: Inventory
    ─────────────────────────────────────────────
    Props:
      theme         : class tema CSS (default: theme-retro)
      storeName     : diteruskan ke sidebar
      storeSubtitle : diteruskan ke sidebar
    Named Slots:
      $sidebar : isi navigasi sidebar
      $content : isi konten utama (tabel, filter, dll)
      $addItem : isi panel tambah barang
    ─────────────────────────────────────────────
--}}

@props([
    'theme'         => 'theme-retro',
    'storeName'     => 'Warung',
    'storeSubtitle' => 'kasiro',
])

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kasir</title>

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400..900&family=Wix+Madefor+Text:ital,wght@0,400..800;1,400..800&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.1/dist/cdn.min.js"></script>
</head>

<body class="{{ $theme }} bg-general-primary font-wix h-screen flex flex-col overflow-hidden"
      x-data="{ sidebarOpen: false, panelOpen: false }"
      x-init="window.addEventListener('resize', () => {
          if (window.innerWidth >= 1024) { sidebarOpen = false; panelOpen = false; }
      })">

    {{-- ── MOBILE TOP BAR (disembunyikan di lg+) ── --}}
    <header class="lg:hidden h-14 shrink-0 bg-general-secondary flex items-center justify-between px-4">
        <button @click="sidebarOpen = !sidebarOpen" class="p-1 text-general-secondary-text">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
        </button>
        <span class="text-general-secondary-text text-size-5 font-wix font-bold">{{ $storeName }}</span>
        <button @click="panelOpen = !panelOpen" class="p-1 text-general-secondary-text">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
            </svg>
        </button>
    </header>

    {{-- ── ROW UTAMA ── --}}
    <div class="flex-1 min-h-0 flex overflow-hidden relative">

        {{-- Backdrop sidebar (mobile) --}}
        <div x-show="sidebarOpen"
             x-transition:enter="transition-opacity ease-out duration-200"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="transition-opacity ease-in duration-200"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"
             @click="sidebarOpen = false"
             class="fixed inset-0 z-40 bg-black/40"
             style="display:none">
        </div>

        {{-- ── SIDEBAR ── --}}
        <div class="fixed top-14 bottom-0 left-0 lg:static lg:top-auto lg:bottom-auto z-50 lg:z-auto shrink-0
                    transition-transform duration-200 ease-in-out lg:translate-x-0"
             :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full lg:translate-x-0'">
            <x-cashier.sidebar :store-name="$storeName" :store-subtitle="$storeSubtitle">
                {{ $sidebar }}
            </x-cashier.sidebar>
        </div>

        {{-- ── CONTENT ── --}}
        <main class="flex-1 min-w-0 self-stretch overflow-hidden bg-general-primary flex flex-col">
            {{ $content }}
        </main>

        {{-- Backdrop panel tambah barang (mobile) --}}
        <div x-show="panelOpen"
             x-transition:enter="transition-opacity ease-out duration-200"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="transition-opacity ease-in duration-200"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"
             @click="panelOpen = false"
             class="fixed inset-0 z-40 bg-black/40"
             style="display:none">
        </div>

        {{-- ── ADD ITEM PANEL ── --}}
        <section class="fixed top-14 bottom-0 right-0 lg:static lg:top-auto lg:bottom-auto z-50 lg:z-auto shrink-0
                        w-72 bg-general-secondary
                        transition-transform duration-200 ease-in-out lg:translate-x-0"
                 :class="panelOpen ? 'translate-x-0' : 'translate-x-full lg:translate-x-0'">
            {{ $addItem }}
        </section>

    </div>

</body>
</html>
