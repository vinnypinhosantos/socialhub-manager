<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $table = 'accounts';
    protected $fillable = [
        'name',
        'status',
    ];
    protected $casts = [
        'status' => \App\Enums\AccountStatus::class,
    ];
    public function isActive(): bool
    {
        return $this->status === 'active';
    }
    public function isInactive(): bool
    {
        return $this->status === 'inactive';
    }
    public function isSuspended(): bool
    {
        return $this->status === 'suspended';
    }
    public function users()
    {
        return $this->hasMany(User::class);
    }
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
    public function socialIntegrations()
    {
        return $this->hasMany(SocialIntegration::class);
    }
}
