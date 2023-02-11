<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;
    //when name model defferent with table name 
    protected $table = 'food';
    protected $primaryKey  = 'id';
    //if u want to use create_at/update_at 
    // protected $timestamps = true;
    //protected $dateFormat = 'h:m:s';
    protected $fillable = ['name', 'description', 'price', 'count', 'category_id','image_path'];
    //a foods belongs to a category
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
