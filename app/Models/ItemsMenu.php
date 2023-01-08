<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemsMenu extends Model
{
    use HasFactory;
    
    protected $table    = 'items_menu';
    protected $fillable = [
        'menu_id',
        'category_item_menu_id',
        'name',
        'description',
        'value',
        'url_image'
    ];
    
    public function menu()
    {
        return $this->belongsTo( Menu::class );
    }
    
    public function categoryItemMenu()
    {
        return $this->belongsTo( CategoryItemMenu::class );
    }
}
