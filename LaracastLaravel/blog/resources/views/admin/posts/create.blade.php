<x-layout>
    <x-setting heading="Publish New Post">
        <form action="/admin/posts" enctype="multipart/form-data" method="post">
            @csrf

            <x-form.input name="title" />

            <x-form.input name="slug" />

            <x-form.input name="thumbnail" type="file" />

            <x-form.textarea name="excerpt" />

            <x-form.textarea name="body" />

            <div>
                <x-form.label name="category" />

                <select
                    class="form-select border border-gray-400 p-2 w-full"
                    name="category_id"
                    id="category_id"
                >
                    @php $categories = \App\Models\Category::all(); @endphp
                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}"
                        {{old('category_id') == $category->id ? 'selected' : ''}}>
                        {{ $category->name }}
                    </option>
                    @endforeach
                </select>
            </div>

            <x-form.button class="mt-10"> Create Post </x-form.button>
        </form>
    </x-setting>
</x-layout>
