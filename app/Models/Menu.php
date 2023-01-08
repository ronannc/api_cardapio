<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    
    protected $table    = 'menu';
    protected $fillable = [
        'company_id',
        'name',
        'description',
        'url_image'
    ];
    
    public function company()
    {
        return $this->belongsTo( Company::class );
    }
    
    public function itemsMenu()
    {
        return $this->hasMany( ItemsMenu::class );
    }
}
