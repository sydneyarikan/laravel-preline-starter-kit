@error($inputname)
<div class="flex flex-wrap justify-between items-center gap-2">
    <p class="text-sm text-red-600 mt-2" id="email-error">{{ $message}}</p>
</div>
@enderror
