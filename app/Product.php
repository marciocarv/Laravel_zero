<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Product extends Model
{
    use softDeletes;

    protected $fillable = [
        'category_id',
        'name',
        'description',
        'exclusive'
    ];

    protected $dates = [
        'deleted_at',
    ];

    public function categoria(){
        return $this->belongsTo(Category::class);
    }

}
