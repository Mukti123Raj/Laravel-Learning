<!DOCTYPE html>

<title>Laravel From Scratch Blog</title>
<link
    href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css"
    rel="stylesheet"
/>
<link rel="preconnect" href="https://fonts.gstatic.com" />
<link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap"
    rel="stylesheet"
/>
<script
    defer
    src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"
></script>

<style>
    html {
        scroll-behavior: smooth;
    }

</style>

<body style="font-family: Open Sans, sans-serif">
    <section class="px-6 py-8">
        <nav class="md:flex md:justify-between md:items-center">
            <div>
                <a href="/">
                    <img
                        src="/images/logo.svg"
                        alt="Laracasts Logo"
                        width="165"
                        height="16"
                    />
                </a>
            </div>

            <div class="mt-8 md:mt-0">
                @auth
                <span class="text-xs font-bold uppercase">Welcome, {{ auth()->user()->name }}</span>
                <form method="POST" action="/logout" class="inline-block">
                    @csrf
                    <button
                        type="submit"
                        class="text-xs bg-red-200 rounded-full px-4 py-1 font-bold uppercase"
                    >
                        Logout
                    </button>

                @else
                <a href="/register" class="text-xs font-bold uppercase">Register</a>
                <a href="/login" class="text-xs font-bold uppercase">Log In</a>

                @endauth

                <a
                    href="#newsletter"
                    class="bg-blue-500 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5"
                >
                    Subscribe for Updates
                </a>
            </div>
        </nav>

        {{ $slot }}

        <footer class="flex justify-between items-center mt-8">
            <div class="flex items-center text-sm">
                <img src="/images/lary-avatar.svg" alt="Lary avatar" />
                <div class="ml-3">
                    <h5 class="font-bold">Lary Laracore</h5>
                    <h6>Mascot at Laracasts</h6>
                </div>
            </div>

            <div>
                <a
                    href="#"
                    class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8"
                >
                    Read More
                </a>
            </div>
        </footer>

        <footer
        id="newsletter"
            class="bg-gray-100 border border-black border-opacity-5 rounded-xl text-center py-16 px-10 mt-16"
        >
            <img
                src="/images/lary-newsletter-icon.svg"
                alt=""
                class="mx-auto -mb-6"
                style="width: 145px"
            />
            <h5 class="text-3xl">Stay in touch with the latest posts</h5>
            <p class="text-sm mt-3">
                Promise to keep the inbox clean. No bugs.
            </p>

            <div class="mt-10">
                <div
                    class="relative inline-block mx-auto lg:bg-gray-200 rounded-full"
                >
                    <form method="POST" action="/newsletter" class="lg:flex text-sm">
                        @csrf
                        <div class="lg:py-3 lg:px-5 flex items-center">
                            <label for="email" class="hidden lg:inline-block">
                                <img
                                    src="/images/mailbox-icon.svg"
                                    alt="mailbox letter"
                                />
                            </label>

                            <input
                                id="email"
                                name="email"
                                type="text"
                                placeholder="Your email address"
                                class="lg:bg-transparent py-2 lg:py-0 pl-4 focus-within:outline-none"
                            />
                            @error('body')
                                <span class="text-red-500 text-xs">
                                     {{ $message }}
                                </span>
                            @enderror
                        </div>

                        <button
                            type="submit"
                            class="transition-colors duration-300 bg-blue-500 hover:bg-blue-600 mt-4 lg:mt-0 lg:ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-8"
                        >
                            Subscribe
                        </button>
                    </form>
                </div>
            </div>
        </footer>
    </section>

    @if (session()->has('Success'))
    <div x-data ="{ show: true }"
    x-init="setTimeout(()=> show = false, 3000)"
    x-show="show"
    class="fixed bottom-0 right-0 bg-green-500 text-white font-bold mr-8 mb-8 px-6 py-4">
        <p>
            {{ session('Success') }}
        </p>
    </div>

    @endif
</body>
