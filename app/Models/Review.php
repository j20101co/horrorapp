<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    
    public function content(){
        return $this->belongsTo(Content::class);
    }
    
    protected $fillable = [
        'title',
        'body',
        'user_id',
        'review',
    ];
    
}
