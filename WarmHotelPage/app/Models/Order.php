<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';

    protected $fillable = [
        'date_from',
        'date_to',
        'adults_count',
        'children_count',
        'room',
        'user_id'
    ];


}
