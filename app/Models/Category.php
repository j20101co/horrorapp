<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    
    public function contents(){
        return $this->hasMany(Content::class);
    }
    
    public function getByCategory(int $limit_count = 5){
        return $this->reviews()->with("category")->paginate($limit_count);
    }
}
