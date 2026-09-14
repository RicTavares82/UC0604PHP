@props([
    'href' => '#',
    'class' => 'btn btn-primary'
])

<a {{ $attributes->merge(['href' => $href, 'class' => $class]) }}>
    {{ $slot }}
</a>
