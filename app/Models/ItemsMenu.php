<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemsMenu extends Model
{
    use HasFactory;
    
    protected $table    = 'items_menu';
    protected $hidden   = [
        'created_at',
        'updated_at'
    ];
    protected $fillable = [
        'company_id',
        'category_item_menu_id',
        'name',
        'description',
        'value',
        'url_image'
    ];
    
    public function category_item_menu()
    {
        return $this->belongsTo( CategoryItemMenu::class );
    }
}
