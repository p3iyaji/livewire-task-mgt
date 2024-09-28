<div>
    @if(session('success'))
        <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" duration="20" role="alert">
            <span class="font-medium">{{ session('success') }}</span>
        </div>
    @elseif(session('error'))
        <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" duration="20" role="alert">
            <span class="font-medium">{{ session('error') }}</span>
        </div>
    @endif

</div>
