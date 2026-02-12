<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Tag;

class Article extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'subtitle', 'body', 'img'];
       public function tags() {
        return $this->belongsToMany(Tag::class);
    }
}
