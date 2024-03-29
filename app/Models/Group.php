<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;
    
    protected $table    = 'group';
    protected $hidden   = [
        'created_at',
        'updated_at'
    ];
    protected $fillable = [
        'name',
        'description'
    ];
}
