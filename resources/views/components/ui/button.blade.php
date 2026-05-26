{{--
    Button Component
    ─────────────────────────────────────────────
    Props:
      variant : primary | secondary | accent | danger
      size    : sm | md | lg
    ─────────────────────────────────────────────
    Semua visual (shadow, padding, radius, border)
    diambil dari CSS variable theme aktif.
--}}

@props([
    'variant' => 'primary',
    'size'    => 'md',
    'href'    => null,
])

@php
$base = "inline-flex justify-center items-center gap-2.5 font-wix cursor-pointer transition-opacity hover:opacity-80
         rounded-[var(--button-border-radius)]
         shadow-[var(--button-drop-shadow)]";

$variants = [
    'primary'   => 'bg-general-primary   text-general-primary-text   border-l border-t border-button-border-color',
    'secondary' => 'bg-general-secondary text-general-secondary-text border-l border-t border-button-border-color',
    'accent'    => 'bg-general-accent    text-general-accent-text    border-l border-t border-button-border-color',
    'danger'    => 'bg-red-500           text-white                  border-l border-t border-button-border-color',
];

$sizes = [
    'sm' => 'text-size-6 px-[var(--button-padding-left)] py-1',
    'md' => 'text-size-5 px-[var(--button-padding-left)] py-[var(--button-padding-top)]',
    'lg' => 'text-size-4 px-[var(--button-padding-left)] py-3',
];

$classes = "{$base} {$variants[$variant]} {$sizes[$size]}";
@endphp

@if ($href)
    <a href="{{ $href }}" {{ $attributes->merge([
        'class' => $classes
    ]) }}>
        {{ $slot }}
    </a>
@else
    <button {{ $attributes->merge([
        'class' => $classes
    ]) }}>
        {{ $slot }}
    </button>
@endif