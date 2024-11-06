<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Image extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'images';
    protected $guarded = [];

    public function news(): BelongsToMany
    {
        return $this->belongsToMany(News::class, 'image_news', 'image_id', 'news_id', 'id', 'id');
    }
}
