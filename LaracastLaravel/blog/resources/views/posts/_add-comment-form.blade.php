@auth
<x-pannel>
    <form id="comment-form" action="/posts/{{ $post->slug }}/comments" method="POST">
        @csrf
        <header class="flex items-center">
            <img
                src="https://i.pravatar.cc/100?u={{ auth()->id() }}"
                alt=""
                width="40"
                height="40"
                class="rounded-full"
            />

            <h2 class="ml-4">Leave a comment here!!</h2>
        </header>

        <div class="mt-6">
            <textarea
                name="body"
                class="w-full text-sm focus:outline-none focus:ring"
                rows="5"
                placeholder="Add your comment here"
            ></textarea>

            @error('body')
            <span class="text-red-500 text-xs">
                {{ $message }}
            </span>
            @enderror
        </div>

        <div class="flex justify-end border-t border-gray-200 pt-6 mt-6">
            <button
                type="submit"
                name="submit_comment"
                class="bg-blue-500 text-white font-semibold text-xs py-2 px-10 rounded-full hover:bg-blue-600"
            >
                Post Comment
            </button>
        </div>
    </form>
</x-pannel>

@else
<p class="font-semibold">
    <a href="/register" class="hover:underline">Register</a> or
    <a href="/login" class="hover:underline">Log in</a> to leave a comment
</p>
@endauth
