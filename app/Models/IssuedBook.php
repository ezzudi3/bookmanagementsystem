<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IssuedBook extends Model
{
    use HasFactory;
    protected $fillable = [
        'book_id',
        'student_id',
        'issue_date',
        'return_date',
        'returned_at',
        'status',
    ];
    public function book()
    {
        return $this->belongsTo(Book::class);
    }
    public function student()
    {
        return $this->belongsTo(User::class, 'student_id');
    }
}
