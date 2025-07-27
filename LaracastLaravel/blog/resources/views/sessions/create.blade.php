<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10">
            <x-pannel>
                <h1 class="text-center font-bold text-xl">Log In!!</h1>

                <form method="POST" action="/login" class="mt-10">
                    @csrf

                    <x-form.input name="email" type="email"/>
                    <x-form.input name="password" type="password"/>
                    <x-form.button class="mt-10"> Log In </x-form.button>
                </form>
            </x-pannel>
        </main>
    </section>
</x-layout>
