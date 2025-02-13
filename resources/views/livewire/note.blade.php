
<div class="block mb-4 bg-white border border-gray-200 rounded-lg shadow-xs hover:bg-gray-50">
    <div class="p-6">
        <h2 class="mb-2 text-lg font-bold tracking-tight text-gray-900 dark:text-white">{{ $title }}</h2>
        <p class="font-normal text-gray-700 dark:text-gray-400">{{ $content }}</p>
    </div>
    <div class="flex p-2 border border-transparent border-t-gray-100">
        <button type="button" class="inline-block w-10 h-10 flex justify-center items-center hover:bg-gray-200 rounded-full">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-bookmark"><path d="m19 21-7-4-7 4V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v16z"/></svg>
        </button>
        <button type="button" class="inline-block w-10 h-10 flex justify-center items-center hover:bg-gray-200 rounded-full">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-pencil"><path d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z"/><path d="m15 5 4 4"/></svg>
        </button>
        <button type="button" class="inline-block w-10 h-10 flex justify-center items-center hover:bg-gray-200 rounded-full">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trash"><path d="M3 6h18"/><path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"/><path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"/></svg>
        </button>
    </div>
</div>
