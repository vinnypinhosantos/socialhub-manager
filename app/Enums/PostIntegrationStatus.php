<?php

namespace App\Enums;

enum PostIntegrationStatus : string
{
    case PENDING = 'pending';
    case PUBLISHED = 'published';
    case FAILED = 'failed';
}
