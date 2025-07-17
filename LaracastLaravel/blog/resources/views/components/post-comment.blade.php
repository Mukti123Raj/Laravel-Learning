<article class="flex bg-gray-100 p-6 rounded-xl border">
    <div>
        <img src="https://i.pravatar.cc/100" alt="" />
    </div>
    <div>
        <header>
            <h3 class="font-bold">
                {{ $comment['author'] ?? 'Jane Doe' }}
            </h3>
            <p class="text-xs">
                Posted
                <time>{{ $comment['date'] ?? '1 day ago' }}</time>
            </p>
        </header>
        <p class="text-sm mt-2">
            {{ $comment['body'] ?? 'This is a dummy comment for demonstration purposes.' }}
        </p>
    </div>
</article>
