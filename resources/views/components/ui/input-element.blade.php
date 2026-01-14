@props(['label', 'value' => null, 'name', 'placeholder', 'type' => 'text'])

<div {{ $attributes->merge(['class' => 'flex flex-col gap-3']) }}>
    <label for="{{ $name }}" class="text-[13px] leading-4 font-medium text-text-muted  ">
        {{ $label }}
    </label>

    <input
        class="bg-white border py-4 rounded-lg px-3 {{ $errors->has($name) ? 'border-red-500' : 'border-light-card' }}"
        type="{{ $type }}" placeholder="{{ $placeholder }}" name="{{ $name }}" id="{{ $name }}">

    @error($name)
        <p class="text-red-500 text-[12px]">
            {{ $message }}
        </p>
    @enderror
</div>

{{-- value="{{ old($name, $value) }}" --}}
