<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use \App\Enums\SocialIntegrationStatus;

class SocialIntegration extends Model
{
    protected $table = 'social_integrations';
    protected $fillable = [
        'account_id',
        'provider',
        'status',
        'access_token',
        'last_synced_at',
    ];

    protected $casts = [
        'last_synced_at' => 'datetime',
        'status' => SocialIntegrationStatus::class,
    ];
    public function account()
    {
        return $this->belongsTo(Account::class);
    }
    public function PostsIntegrations()
    {
        return $this->hasMany(PostIntegration::class);
    }
}
