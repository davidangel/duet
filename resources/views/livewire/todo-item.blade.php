<li wire:sortable.item="{{ $item->id }}" wire:sortable.handle draggable="true">
  <div class="flex items-center justify-between w-full p-2 cursor-pointer hover:bg-gray-50">
    <form wire:submit.prevent="save" class="flex items-center justify-start w-full">
      <input type="checkbox" wire:click="toggle()" @if ($item->completed_at) checked @endif
        class="w-6 h-6 rounded-full cursor-pointer hover:bg-blue-100 focus:shadow-none focus:ring-0 focus:outline-none" />
      <input type="text" wire:model.lazy="item.title" wire:change="save" wire:keydown.enter="save"
        class="w-full px-1 py-1 mx-2 text-xl bg-transparent border-0 cursor-pointer focus:shadow-none focus:ring-0 focus:outline-none focus:border-b-2 focus:border-blue-300 " />
    </form>
    @if ($item->completed_at)
      <div class="float-right w-64 pr-4 text-xs text-gray-500">
        completed {{ \Carbon\Carbon::createFromTimeStamp(strtotime($item->completed_at))->diffForHumans() }}
      </div>
    @endif
    <button wire:click="delete({{ $item->id }})"
      class="flex items-center justify-center float-right object-center w-6 h-6 p-2 text-sm text-white bg-red-300 border-none rounded-full focus:outline-none hover:bg-red-500">x</button>
  </div>
</li>
