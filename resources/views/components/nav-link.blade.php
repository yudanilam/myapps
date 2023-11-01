@props(['active' => false])
@php
    $classes = $active ?? false ? 'dropdown-toggle no-arrow active' : 'dropdown-toggle no-arrow';
@endphp
<li class="dropdown">
    <a wire:navigate {{ $attributes->merge(['class' => $classes]) }}>
        <span class="micon bi bi-chat-right-dots">
        </span><span class="mtext">{{ $slot }}</span>
    </a>

</li>
