<?php

namespace App\Http\Livewire;

use App\Models\TodoItem;
use App\Models\TodoList;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class TodoLists extends Component
{

    protected $listeners = ['listAdded' => 'lists', 'listDeleted' => 'lists'];

    public function lists()
    {
        return Auth::user()->currentTeam->todoLists()->get();
    }

    public function render()
    {
        return view('livewire.todo-lists')->with('lists', $this->lists());
    }
}
