<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Post
 * @package App
 */
class Post extends Model
{
    protected $fillable = [
        'user_id',
        'title',
        'slug',
        'image',
        'content',
        'premium'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function author() {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * @return string
     */
    public function getExcerpt() {
        return str_limit($this->content, 40);
    }
}
