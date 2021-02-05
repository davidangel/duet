<?php

namespace App\Http\Livewire;

use App\Models\TodoItem;
use App\Models\TodoList as ModelsTodoList;
use Carbon\Carbon;
use Livewire\Component;

class TodoList extends Component
{

    public $list;
    public $newItemTitle;
    protected $listeners = ['itemDeleted' => 'render', 'itemToggled' => 'render'];

    public function updateTaskOrder($reorderedItems) {
        //dd($reorderedItems);
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


    public function render()
    {
        return view('livewire.todo-list')->with('list', $this->list);
    }
}
