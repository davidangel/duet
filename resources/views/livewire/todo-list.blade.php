    <div class="mb-4">
      <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="p-4 overflow-hidden bg-white shadow-xl sm:rounded-lg">
          <li class="flex justify-between mb-1 mb-2 text-xl">
            <div class="w-full">
              <div class="flex justify-between px-2 mb-2 text-2xl font-bold">
                <div>{{ $list->title }}</div>
                <button wire:click="toggleShowCompleted"
                  class="flex items-center justify-center object-center px-4 py-1 text-xs text-white bg-gray-400 rounded-full focus:outline-none hover:bg-gray-500">
                  @if ($showCompleted)
                    hide completed items
                  @else
                    show completed items
                  @endif
                </button>
                <button wire:click="delete({{ $list->id }})"
                  class="flex items-center justify-center object-center w-6 h-6 p-2 text-sm text-white bg-red-300 rounded-full focus:outline-none hover:bg-red-500">x</button>
              </div>
              <ul wire:sortable="updateTaskOrder">
                @foreach ($list->items()->get() as $item)
                  @if (!$item->completed_at || $showCompleted)
                    <livewire:todo-item :item="$item" :key="$item->id" />
                  @endif
                @endforeach
              </ul>
              <input wire:model="newItemTitle" wire:keydown.enter="createTodoItem()" class="w-full mt-4 border-gray-200"
                type="text" placeholder="Add new item">

            </div>
            <div>

            </div>
          </li>
        </div>
      </div>
    </div>
