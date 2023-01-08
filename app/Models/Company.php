<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    
    protected $table    = 'company';
    protected $fillable = [
        'name',
        'description',
        'group_id'
    ];
    
    public function group()
    {
        return $this->belongsTo( Group::class );
    }
    
    public function menu()
    {
        return $this->hasMany( Menu::class );
    }
}
