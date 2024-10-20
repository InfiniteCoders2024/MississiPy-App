<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $table = 'Book';
    protected $connection = 'mysql_mississipy';

    protected $primaryKey = null;
    public $incrementing = false;
    
    public $timestamps = false;
    protected $fillable = ['isbn13', 'title', 'genre', 'publisher', 'publication_date'];


    public function Product()
    {
        return $this->belongsTo(Product::class);
    }


    public function BookAuthor()
    {
        return $this->hasMany(BookAuthor::class, 'procuct_id');
    }
}

