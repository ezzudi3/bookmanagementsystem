<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

     protected $fillable = [
        'title',
        'category_id',
        'author_id',
        'quantity',
    ];
    // Relationships
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    public function issuedBooks()
    {
        return $this->hasMany(IssuedBook::class);
    }
    public function getAvailableQuantityAttribute()
    {
        return $this->quantity - $this->issuedBooks()
            ->where('status', 'issued')
            ->count();
    }   
}
