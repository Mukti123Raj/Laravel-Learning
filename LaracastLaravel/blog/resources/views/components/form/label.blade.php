@props(['name'])
<label
    enter-class="block mb-2 uppercase font-bold text-xs text-gray-700"
    for="{{ $name }}"
    class="form-label"
>
    {{ ucwords($name) }}
</label>
