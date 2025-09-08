@props(['navigate' => true, 'hover' => false])

<a {{
    $attributes->class([
      'inline underline',
      'decoration-[1px]',
      'decoration-gray-300 underline-offset-3',
      'hover:text-blue-500 hover:decoration-blue-500',
      'transition-colors duration-200',
    ])
  }} @if ($navigate) wire:navigate @endif @if ($hover) wire:navigate.hover @endif>{{ $slot }}</a>
