<div class="mb-4">
    <label class="block text-gray-700 text-sm mb-2" for="{{ \Illuminate\Support\Str::kebab($label) }}">
        {{ $label }}
    </label>
    <div class="relative">
        <select
            id="{{ \Illuminate\Support\Str::kebab($label) }}"
            class="form-input block w-full pr-12 sm:text-sm sm:leading-5"
        >
            @foreach($items as $item)
                <option>{{ $item }}</option>
            @endforeach
        </select>
        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
        </div>
    </div>
</div>
