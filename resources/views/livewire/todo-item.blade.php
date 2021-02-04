<li class="flex w-full p-1 hover:bg-gray-50">
    <button wire:click="toggle()" class="flex focus:outline-none items-center justify-center object-center w-6 h-6 p-1 text-xs text-white
        @if ($item->completed_at) bg-blue-500 @else bg-blue-100 @endif
        rounded-full hover:bg-blue-200">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
        </svg>
    </button>
    <div class="w-full mx-2">
        {{ $item->title }}
    </div>
    <button wire:click="delete({{ $item->id }})"
        class="flex items-center justify-center object-center w-6 h-6 p-2 text-sm text-white bg-red-300 border-none rounded-full focus:outline-none hover:bg-red-500">x</button>

</li>
