<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    protected $table = 'Author';
    protected $connection = 'mysql_mississipy';
    public $timestamps = false;
    protected $fillable = [
        'name',
        'fullname',
        'birthdate'
    ];

    public function Book()
    {
        return $this->belongsToMany(Book::class, 'BookAuthor', 'author_id', 'id');
    }
}