<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookAuthor extends Model
{
    use HasFactory;

    protected $table = 'BookAuthor';
    protected $connection = 'mysql_mississipy';
    public $timestamps = false;

    
    public function Author()
    {
        return $this->belongsTo(Author::class);
    }


    public function Book()
    {
        return $this->belongsTo(Book::class, 'product_id');
    }
}
