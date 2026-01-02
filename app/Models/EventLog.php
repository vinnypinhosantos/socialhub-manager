<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use \App\Enums\EventLogLevel;

class EventLog extends Model
{
    protected $table = 'events_logs';

    protected $fillable = [
        'event_type',
        'description',
        'level',
        'related_type',
        'related_id',
    ];
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'level' => EventLogLevel::class,
    ];
    public function related()
    {
        return $this->morphTo();
    }
}
