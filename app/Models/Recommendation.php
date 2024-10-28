<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recommendation extends Model
{
    use HasFactory;

    protected $table = 'Recommendation';
    protected $connection = 'mysql_mississipy';
    public $timestamps = false;
    protected $fillable = [
        'reason',
        'start_date'
    ];


    public function Product()
    {
        return $this->belongsTo(Product::class);
    }

    
    public function Client()
    {
        return $this->belongsTo(Client::class);
    }
}
