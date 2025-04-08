<x-auth.layout>

    <div class="mt-7 bg-white border border-gray-200 rounded-xl shadow-2xs dark:bg-neutral-900 dark:border-neutral-700">
    <div class="p-4 sm:p-7">
        <div class="text-center">
            <h1 class="block text-2xl font-bold text-gray-800 dark:text-white">Login</h1>
            <p class="mt-2 text-sm text-gray-600 dark:text-neutral-400">
                Don't have an account yet?
                <a class="
                        text-blue-600 decoration-2 hover:underline focus:outline-hidden focus:underline font-medium
                        dark:text-blue-500"
                   href="{{ route('register') }}">
                    Sign up here
                </a>
            </p>
        </div>

        <div class="mt-5">
            <!-- Form -->
            <form method="POST" action="{{ route('login') }}">
                <div class="grid gap-y-4">
                    <div>
                        <x-forms.label type="email" label="Email Address" />
                        <x-forms.input type="email" id="email" inputname="email"/>
                        <x-forms.error-message inputname="email" />
                    </div>

                    <div>
                        <x-forms.label type="password" label="Password" />
                        <x-forms.input type="password" id="password" inputname="password"/>
                        <x-forms.error-message inputname="password" />
                    </div>
                    <!-- End Form Group -->

                    <!-- Checkbox -->
                    <div class="flex items-center">
                        <div class="flex">
                            <input id="remember-me" name="remember-me" type="checkbox" class="shrink-0 mt-0.5 border-gray-200 rounded-sm text-blue-600 focus:ring-blue-500 dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800">
                        </div>
                        <div class="ms-3">
                            <label for="remember-me" class="text-sm dark:text-white">Remember me</label>
                        </div>
                    </div>
                    @csrf

                    <button
                        type="submit"
                        class="
                            w-full py-3 px-4 inline-flex justify-center items-center
                            gap-x-2 text-sm font-medium rounded-lg
                            border border-transparent
                            bg-blue-600 text-white
                            hover:bg-blue-700 focus:outline-hidden
                            focus:bg-blue-700 disabled:opacity-50
                            disabled:pointer-events-none"
                    >Sign in</button>
                </div>
            </form>
            <!-- End Form -->
        </div>
    </div>
</div>
</x-auth.layout>
