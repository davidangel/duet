<ul>
    @foreach ($lists as $list)
        <livewire:todo-list :list="$list" :key="$list->id">
    @endforeach
</ul>
