<?php

namespace App\Http\Livewire;

use App\Models\TodoItem;
use App\Models\TodoList as ModelsTodoList;
use Livewire\Component;

class TodoList extends Component
{

    public $list;
    public $newItemTitle;
    public $showCompleted = false;
    protected $listeners = ['itemDeleted' => 'render', 'itemToggled' => 'render'];

    public function updateTaskOrder($reorderedItems) {
        array_map(function($item) {
            $todo = TodoItem::find($item['value']);
            $todo->order = $item['order'];
            $todo->save();
        }, $reorderedItems);
    }

    public function createTodoItem()
    {
        $item = new TodoItem();
        $item->title = $this->newItemTitle;
        $this->list->items()->save($item);
        $item->save();
        $this->newItemTitle = '';
    }

    public function delete($id)
    {
        ModelsTodoList::destroy($id);
        $this->emit('listDeleted');
    }

    public function toggleShowCompleted() {
        $this->showCompleted = !$this->showCompleted;
    }


    public function render()
    {
        return view('livewire.todo-list')->with('list', $this->list);
    }
}
