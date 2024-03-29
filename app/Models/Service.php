<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [ 
        'category_id',
        'title',
        'desc',
        'contact',
        'cost'
    ];

    public function category()
{
    return $this->belongsTo(Categorie::class,'category_id');
}

    
}
