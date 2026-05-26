{{--
    Layout: Cashier
    ─────────────────────────────────────────────
    Props:
      theme         : class tema CSS (default: theme-retro)
      storeName     : diteruskan ke sidebar
      storeSubtitle : diteruskan ke sidebar
    Named Slots:
      $sidebar : isi navigasi sidebar
      $content : isi konten utama (product grid, dll)
      $cart    : isi panel keranjang
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

    @vite(['resources/css/app.css'])
</head>

<body class="{{ $theme }} bg-general-primary font-wix">

    <div class="w-screen h-screen flex overflow-hidden">

        {{-- ── SIDEBAR ── --}}
        <x-cashier.sidebar
            :store-name="$storeName"
            :store-subtitle="$storeSubtitle"
        >
            {{ $sidebar }}
        </x-cashier.sidebar>

        {{-- ── CONTENT ── --}}
        <main class="flex-1 self-stretch overflow-hidden bg-general-primary flex flex-col">
            {{ $content }}
        </main>

        {{-- ── ADD ITEM ── --}}
        <section class="w-72 bg-general-secondary flex-shrink-0">
            {{ $addItem }}
        </section>

    </div>

</body>
</html>