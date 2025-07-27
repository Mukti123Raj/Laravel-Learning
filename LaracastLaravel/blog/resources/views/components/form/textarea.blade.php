@props(['name'])
<div class="mb-3">
    <x-form.label name="{{ $name }}" />

    <textarea
        class="form-control border border-gray-200 p-2 w-full rounded"
        name="{{ $name }}"
        id="{{ $name }}"
        required
        {{$attributes}}
        rows="3"
    >{{$slot ?? old($name)}} </textarea>
</div>
