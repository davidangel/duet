<?php

namespace App\Http\Livewire;

use App\Models\TodoList;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CreateNewList extends Component
{
    public $name = '';

    public function createList()
    {
        $list = new TodoList;
        $list->title = $this->name;
        $list->team_id = Auth::user()->currentTeam->id;
        $list->save();
        Auth::user()->currentTeam->todoLists()->save($list);
        $this->emit('listAdded');
        $this->name = '';
    }


    public function render()
    {
        return view('livewire.create-new-list');
    }
}
