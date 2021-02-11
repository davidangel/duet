<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TodoList extends Model
{
    use HasFactory;

    public function items() {
        return $this->HasMany(TodoItem::class);
    }

    public function owners() {
        return $this->BelongsToMany(User::class);
    }

    public function team() {
        return $this->belongsTo(Team::class);
    }
}
