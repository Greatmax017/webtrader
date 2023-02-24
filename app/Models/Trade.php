<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trade extends Model
{
    protected $fillable = [
        'volume',
        'symbol',
        'side',
        'type',
        'sl',
        'tp',
        'price',
        'user',
        'profit',
        'entry_price',
        'exit_price',
        'commission',
        'status',
        'spread',
        'nominal'
    ];
}
