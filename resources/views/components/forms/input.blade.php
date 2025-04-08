<div class="relative">
    <input
        type="{{ $type }}"
        id="{{ $id }}"
        name="{{ $inputname }}"
        class="
            py-2.5 sm:py-3 px-4 block w-full
            border-gray-200 rounded-lg sm:text-sm
            focus:border-blue-500
            focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none
            dark:bg-neutral-900
            dark:border-neutral-700
            dark:text-neutral-400
            dark:placeholder-neutral-500
            dark:focus:ring-neutral-600
            @error($inputname)
                border-red-500 ring-red-500 focus:border-red-500 focus:ring-red-500
            @enderror"
        aria-describedby="email-error">

    @error($inputname)
    <div class="absolute inset-y-0 end-0 flex items-center pointer-events-none pe-3">
        <svg class="shrink-0 size-4 text-red-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="12" cy="12" r="10"></circle>
            <line x1="12" x2="12" y1="8" y2="12"></line>
            <line x1="12" x2="12.01" y1="16" y2="16"></line>
        </svg>
    </div>
    @enderror
</div>


