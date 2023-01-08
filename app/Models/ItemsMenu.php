<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemsMenu extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'menu_id',
        'name',
        'description',
        'value',
        'url_image'
    ];
}
