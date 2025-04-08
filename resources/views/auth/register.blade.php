<x-layouts.auth>

<div class="mt-7 bg-white border border-gray-200 rounded-xl shadow-2xs dark:bg-neutral-900 dark:border-neutral-700">
    <div class="p-4 sm:p-7">
        <div class="text-center">
            <h1 class="block text-2xl font-bold text-gray-800 dark:text-white">Register New Account</h1>
                <p class="mt-2 text-sm text-gray-600 dark:text-neutral-400">
                    Already have an account?
                    <a class="text-blue-600 decoration-2 hover:underline focus:outline-hidden focus:underline font-medium dark:text-blue-500" href="../examples/html/signin.html">
                        Login here
                    </a>
                </p>
            </div>

            <div class="mt-5">
                <!-- Form -->
                <form method="POST" action="{{ route('register') }}" class="space-y-5">

                    <div class="grid gap-y-4">
                        <div>
                            <x-forms.label type="email" label="Name" />
                            <x-forms.input type="text" id="name" inputname="name"/>
                            <x-forms.error-message inputname="name" />

                        </div>
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
                        <div>
                            <x-forms.label type="confirm-password" label="Confirm Password" />
                            <x-forms.input type="password" id="password_confirmation" inputname="password_confirmation"/>
                            <x-forms.error-message inputname="password_confirmation" />
                        </div>
                        @csrf

                        <button type="submit"
                                class="
                                    w-full py-3 px-4 inline-flex justify-center items-center
                                    gap-x-2 text-sm font-medium rounded-lg
                                    border border-transparent
                                    bg-blue-600 text-white hover:bg-blue-700 focus:outline-hidden
                                    focus:bg-blue-700 disabled:opacity-50
                                    disabled:pointer-events-none">
                            Register New Account
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layouts.auth>
