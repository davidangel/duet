<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class TodoList extends Model
{
    use HasFactory;

    public function items() {
        return $this->HasMany(TodoItem::class)->select(['*', DB::raw('IF(`order` IS NOT NULL, `order`, 1000000) `order`')])->orderBy('order', 'asc');;
    }

    public function owners() {
        return $this->BelongsToMany(User::class);
    }

    public function team() {
        return $this->belongsTo(Team::class);
    }
}
