<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'Order';
    protected $connection = 'mysql_mississipy';
    public $timestamps = false;
    protected $fillable = [
        'date_time',
        'delivery_method',
        'status',
        'payment_card_number',
        'payment_card_name',
        'payment_card_expiration'
    ];


    public function OrderedItem()
    {
        return $this->hasMany(Ordered_Item::class);
    }

    
    public function Client()
    {
        return $this->belongsTo(Client::class);
    }
}
