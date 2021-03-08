<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $table = 'article';

    protected $fillable = ['title', 'image', 'alt_image', 'user_id'];

    public function user()
    {
       return $this->hasOne(User::class, 'id', 'user_id');
    }
}
