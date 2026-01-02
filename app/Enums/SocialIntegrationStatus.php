<?php

namespace App\Enums;

enum SocialIntegrationStatus: string
{
    case ACTIVE = 'active';
    case DISCONNECTED = 'disconnected';
    case ERROR = 'error';
    case INACTIVE = 'inactive';
}