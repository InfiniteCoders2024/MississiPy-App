<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class BookAuthor extends Pivot
{
    use HasFactory;

    protected $table = 'BookAuthor';
    protected $connection = 'mysql_mississipy';
    public $timestamps = false;

    
    public function Author()
    {
        return $this->belongsTo(Author::class, 'id');
    }


    public function Book()
    {
        return $this->belongsTo(Book::class, 'product_id');
    }
}
