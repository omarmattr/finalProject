<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class store extends Model
{
    use HasFactory;
    protected $fillable = ["name"];
    function category(){
        return $this->belongsTo(Category::class,"categoryId");
    }

    function rating(){
        return $this->hasMany(review::class)->selectRaw
        ('count(store_id) as s, store_id, sum(rate)/count(store_id) as rating') ->groupBy('store_id');
    }

    function rating_store(){
        return $this->hasMany(review::class);
    }
}
