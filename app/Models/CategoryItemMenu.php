<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryItemMenu extends Model
{
    use HasFactory;
    
    protected $hidden   = [
        'created_at',
        'updated_at'
    ];
    protected $table    = 'category_item_menu';
    protected $fillable = [
        'company_id',
        'name'
    ];
    
    public function items_menu()
    {
        return $this->hasMany( ItemsMenu::class );
    }
}
