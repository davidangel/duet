<li wire:sortable.item="{{ $item->id }}" wire:sortable.handle draggable="true"
  class="flex items-center justify-center w-full p-2 cursor-pointer hover:bg-gray-50">
  <input type="checkbox" wire:click="toggle()" @if ($item->completed_at) checked @endif />
  <div class="flex items-center justify-between w-full mx-2">
    <div>{{ $item->title }}</div>
    @if ($item->completed_at)
      <div class="text-sm text-gray-500">
        completed {{ \Carbon\Carbon::createFromTimeStamp(strtotime($item->completed_at))->diffForHumans() }}
      </div>
    @endif
  </div>
  <button wire:click="delete({{ $item->id }})"
    class="flex items-center justify-center object-center w-6 h-6 p-2 text-sm text-white bg-red-300 border-none rounded-full focus:outline-none hover:bg-red-500">x</button>
</li>
