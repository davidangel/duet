<x-app-layout>
  <div class="py-6">
    @livewire('todo-lists')
  </div>

  <div class="">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
      <div class="p-4 overflow-hidden bg-white shadow-xl sm:rounded-lg">
        @livewire('create-new-list')
      </div>
    </div>
  </div>
</x-app-layout>
