@props(['comment'])

<x-pannel class="bg-gray-100">
    <article class="flex ">
        <div class="mr-4">
            <img
                src="https://i.pravatar.cc/100?u={{ $comment->user_id }}"
                alt=""
                class="rounded-full w-32"
            />
        </div>
        <div>
            <header>
                <h3 class="font-bold">
                    {{$comment->author->username }}
                </h3>
                <p class="text-xs">
                    Posted
                    <time>{{ $comment->created_at }}</time>
                </p>
            </header>
            <p class="text-sm mt-2">
                {{$comment->body }}
            </p>
        </div>
    </article>
</x-pannel>
