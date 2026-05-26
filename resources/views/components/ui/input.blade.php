{{--
    Input Component
    ─────────────────────────────────────────────
    Semua visual (shadow, padding, radius, border)
    diambil dari CSS variable theme aktif.
--}}

@props([
    'placeholder' => '',
    'type'        => 'text',
])

<input
    type="{{ $type }}"
    placeholder="{{ $placeholder }}"
    {{ $attributes->merge([
        'class' => "w-full font-wix outline-none
                    bg-general-white text-general-primary-text
                    text-size-5
                    rounded-[var(--input-border-radius)]
                    border-r border-b border-input-border-color
                    shadow-[var(--input-inner-shadow)]
                    px-[var(--input-padding-left)]
                    py-[var(--input-padding-top)]
                    placeholder:text-general-gray-2"
    ]) }}
/>