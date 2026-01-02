<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Enums\PostIntegrationStatus;

class PostIntegration extends Model
{
    protected $table = 'post_integrations';
    protected $fillable = [
        'post_id',
        'social_integration_id',
        'status',
        'error_message',
    ];
    protected $casts = [
        'status' => PostIntegrationStatus::class,
        'error_message' => 'string',
    ];
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
    public function socialIntegration()
    {
        return $this->belongsTo(SocialIntegration::class);
    }
}
