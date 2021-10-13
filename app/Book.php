<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use SoftDeletes;
    protected $fillable = ['title', 'description', 'author_id', 'cover', 'qty'];
    
    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    public function getCover()
    {
        if (substr($this->cover, 0,5) == 'https') {
            return $this->cover;
        } 

        if ($this->cover) {
            return asset('storage/' . $this->cover);
        }

        return 'https://via.placeholder.com/200x150.png?text=No+Cover';
    }

    public function borrowed()
    {
        return $this->belongsToMany(User::class, 'borrow_history')->withTimestamps();
    }
}
