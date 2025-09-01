@props([
  'items',
])

<div class="border-b border-gray-200 py-3 text-sm">
  <div class="mx-auto flex max-w-7xl items-center gap-x-2 px-6 lg:px-8 xl:px-0">
    <div class="flex gap-x-2">
      <p class="text-gray-500">You are here:</p>
      @foreach ($items as $item)
        @if (isset($item['route']))
          <x-link href="{{ $item['route'] }}">{{ $item['label'] }}</x-link>
        @else
          <p class="text-gray-500">{{ $item['label'] }}</p>
        @endif
        @if (! $loop->last)
          <p class="text-gray-500">/</p>
        @endif
      @endforeach
    </div>
  </div>
</div>
