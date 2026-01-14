@props(['label', 'name', 'options' => [], 'value' => null])

<div class="flex flex-col gap-2 w-full">
    <label for="{{ $name }}" class="text-[13px] font-medium text-text-muted dark:text-periwinkle">
        {{ $label }}
    </label>

    <div class="relative">
        <select name="{{ $name }}" id="{{ $name }}"
            {{ $attributes->merge([
                'class' =>
                    'w-full appearance-none bg-white dark:bg-dark-blue-light py-4 rounded-lg px-3 text-sm font-bold outline-none cursor-pointer transition-colors ' .
                    ($errors->has($name) ? 'border border-red-500' : 'border border-light-card dark:border-dark-blue-deep'),
            ]) }}>
            @foreach ($options as $optionValue => $optionLabel)
                <option value="{{ $optionValue }}" @selected(old($name, $value) == $optionValue)>
                    {{ $optionLabel }}
                </option>
            @endforeach
        </select>

        <div class="absolute right-4 top-1/2 -translate-y-1/2 pointer-events-none">
            <img src="{{ Vite::asset('resources/images/icon-arrow-down.svg') }}" alt="" class="w-3">
        </div>
    </div>

    @error($name)
        <p class="text-red-500 text-[12px]">{{ $message }}</p>
    @enderror
</div>
