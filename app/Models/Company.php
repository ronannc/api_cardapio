<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    
    protected $table    = 'company';
    protected $hidden   = [
        'created_at',
        'updated_at'
    ];
    protected $fillable = [
        'name',
        'description',
        'group_id',
        'primary_color',
        'url_logo',
        'star_hours',
        'finish_hours'
    ];
    
    public function group()
    {
        return $this->belongsTo( Group::class );
    }
    
    public function items_menu()
    {
        return $this->hasMany( ItemsMenu::class );
    }
    
    public function categories_items_menu()
    {
        return $this->hasMany( CategoryItemMenu::class, );
    }
}
