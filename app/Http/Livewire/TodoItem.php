<?php

namespace App\Http\Livewire;

use App\Models\TodoItem as ModelsTodoItem;
use Carbon\Carbon;
use Livewire\Component;

class TodoItem extends Component
{
    public $item;

    protected $rules = [
        'item.title' => 'required|string|min:1'
    ];

    public function save()
    {
        $this->validate();
        $this->item->save();
    }

    public function toggle()
    {
        $this->item->completed_at = $this->item->completed_at ? null : Carbon::now();
        $this->item->save();
        $this->emit('itemToggled');
    }

    public function delete($id) {
        ModelsTodoItem::destroy($id);
        $this->emit('itemDeleted');
    }

    public function render()
    {
        return view('livewire.todo-item');
    }
}
