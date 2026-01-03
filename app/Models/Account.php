<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Enums\AccountStatus;

class Account extends Model
{
    protected $table = 'accounts';
    protected $fillable = [
        'name',
        'status',
    ];
    protected $casts = [
        'status' => AccountStatus::class,
    ];
    public function isActive(): bool
    {
        return $this->status === AccountStatus::ACTIVE;
    }
    public function isInactive(): bool
    {
        return $this->status === AccountStatus::INACTIVE;
    }
    public function isSuspended(): bool
    {
        return $this->status === AccountStatus::SUSPENDED;
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
