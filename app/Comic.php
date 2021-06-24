<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Comic extends Model
{ 
    use Notifiable;
    
    protected $fillable = [
        'title', 'description', 'price', 'series' , 'sale_date', 'type'
    ];
}
