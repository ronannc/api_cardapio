<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryItemMenu extends Model
{
    use HasFactory;
    
    protected $table    = 'category_item_menu';
    protected $fillable = [
        'name'
    ];
}
