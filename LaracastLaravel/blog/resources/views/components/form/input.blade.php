@props(['name', 'type' => 'text'])

<div class="mb-3">
    <x-form.label name="{{ $name }}" />
    <input
        class="form-control border border-gray-200 p-2 w-full rounded"
        name="{{ $name }}"
        id="{{ $name }}"
        type="{{ $type }}"
        {{ $attributes(['value' => old($name)]) }}
    />
    @error('email')
    <p class="text-red-500 text-xs mt-2">
        {{ $message }}
    </p>
    @enderror
</div>
