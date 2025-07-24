<x-layout>
    <x-pannel class="max-w-sm mx-auto">
        <section class="px-6 py-8">
            <form action="/admin/posts" method="post">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input
                        type="text"
                        class="form-control border border-gray-400 p-2 w-full"
                        name="title"
                        id="title"
                        value="{{ old('title') }}"
                        aria-describedby="helpId"
                        placeholder=""
                    />
                </div>

                <div class="mb-3">
                    <label for="slug" class="form-label">Slug </label>
                    <textarea
                        class="form-control border border-gray-400 p-2 w-full"
                        name="slug"
                        id="slug"

                        rows="2"
                        value="{{ old('slug') }}"
                    ></textarea>
                </div>

                <div class="mb-3">
                    <label for="excerpt" class="form-label">Excerpt </label>
                    <textarea
                        class="form-control border border-gray-400 p-2 w-full"
                        name="excerpt"
                        id="excerpt"
                        value="{{ old('excerpt') }}"
                        rows="3"
                    ></textarea>
                </div>

                <div>
                    <label for="body" class="form-label">Body </label>
                    <textarea
                        class="form-control border border-gray-400 p-2 w-full"
                        name="body"
                        id="body"
                        value="{{ old('body') }}"
                        rows="3"
                    ></textarea>
                </div>

                <div>
                    <label for="category_id" class="form-label"
                        >Category
                    </label>
                    <select
                        class="form-select border border-gray-400 p-2 w-full"
                        name="category_id"
                        id="category_id"
                    >
                        @php $categories = \App\Models\Category::all(); @endphp
                        @foreach ($categories as $category)
                        <option value="{{ $category->id }}">
                            {{ $category->name }}
                        </option>
                        @endforeach
                    </select>
                </div>

                <x-submit-button class="mt-8"> Create Post </x-submit-button>
            </form>
        </section>
    </x-pannel>
</x-layout>
