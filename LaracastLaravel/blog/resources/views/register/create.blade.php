<x-layout>
    <section class="px-6 py-8">
        <main
            class="max-w-lg mx-auto mt-10 bg-gray-100 border border-gray-200 p-6 rounded-xl"
        >
            <h1 class="text-center font-bold text-xl">Register</h1>

            <form method="POST" action="/register" class="mt-10">
                @csrf
                <div class="col">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input
                            type="text"
                            name="name"
                            id="name"
                            class="form-control border border-gray-400 p-2 w-full"
                            placeholder="Name"
                            value="{{ old('name') }}"
                            aria-describedby="helpId"
                            required
                        />
                        @error('name')
                            <p class="text-red-500 text-xs mt-2">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                </div>

                <div class="mb-3">
                    <label for="username" class="form-label">UserName</label>
                    <input
                        type="text"
                        class="form-control border border-gray-400 p-2 w-full"
                        name="username"
                        id="username"
                        value="{{ old('username') }}"
                        aria-describedby="helpId"
                        placeholder="Username"
                        required
                    />
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input
                            type="email"
                            class="form-control border border-gray-400 p-2 w-full"
                            name="email"
                            id="email"
                            value="{{ old('email') }}"
                            aria-describedby="helpId"
                            placeholder="Email"
                            required
                        />

                        @error('email')
                            <p class="text-red-500 text-xs mt-2">
                                {{ $message }}
                            </p>
                        @enderror

                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label"
                            >Password</label
                        >
                        <input
                            type="password"
                            class="form-control border border-gray-400 p-2 w-full"
                            name="password"
                            id="password"
                            aria-describedby="helpId"
                            placeholder="password"
                            required
                        />
                        @error('password')
                            <p class="text-red-500 text-xs mt-2">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <button
                        type="submit"
                        class="btn btn-primary w-full bg-blue-500 text-white p-2 rounded-lg hover:bg-blue-600 transition duration-300"
                    >
                        Submit
                    </button>
                </div>
            </form>
        </main>
    </section>
</x-layout>
