<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use \App\Enums\PostStatus;

class Post extends Model
{
    protected $table = 'posts';
    protected $fillable = [
        'account_id',
        'content',
        'status',
        'scheduled_at',
        'published_at',
    ];

    protected $casts = [
        'scheduled_at' => 'datetime',
        'published_at' => 'datetime',
        'status' => PostStatus::class,
    ];

    public function account()
    {
        return $this->belongsTo(Account::class);
    }
    public function postIntegrations()
    {
        return $this->hasMany(PostIntegration::class);
    }
}
