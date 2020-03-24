<div class="mb-4">
    <label class="block text-gray-700 text-sm mb-2" for="{{ \Illuminate\Support\Str::kebab($label) }}">
        {{ $label }}
    </label>
    @foreach($items as $item)
        <input
            type="radio"
            id="{{ \Illuminate\Support\Str::kebab($item) }}"
            name="{{ $name }}"
            @if($loop->first)
                {{ 'checked' }}
            @endif
        >
        <label
            class="text-gray-700 text-sm px-2"
            for="{{ \Illuminate\Support\Str::kebab($item) }}"
        >
            {{ \Illuminate\Support\Str::title($item) }}
        </label>
    @endforeach
</div>
