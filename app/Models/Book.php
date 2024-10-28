<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $table = 'Book';
    protected $connection = 'mysql_mississipy';

    protected $primaryKey = 'product_id';
    protected $keyType = 'string';
    public $incrementing = false;
    
    public $timestamps = false;
    protected $fillable = [
        'isbn13',
        'title',
        'genre',
        'publisher',
        'publication_date'
    ];


    public function Product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function Author()
    {
        return $this->belongsToMany(Author::class, 'BookAuthor', 'author_id', 'id');
    }
}

