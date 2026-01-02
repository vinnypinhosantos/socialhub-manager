<?php

namespace App\Models;

use App\Enums\JobLogStatus;
use Illuminate\Database\Eloquent\Model;

class JobLog extends Model
{
    protected $table = 'jobs_logs';
    protected $fillable = [
        'job_name',
        'message',
        'status',
    ];
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'status' => JobLogStatus::class,
    ];
}
