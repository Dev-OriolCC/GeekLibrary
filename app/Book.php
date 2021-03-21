<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model{
    
    protected $fillable = ['title', 'author', 'description', 'image', 'isbn', 'publisher', 'pages', 'edition', 'country', 'year', 'category_id', 'descriptionLong'];

    use SoftDeletes;

    public function category(){
        return $this->belongsTo(Category::class);
    }

}
