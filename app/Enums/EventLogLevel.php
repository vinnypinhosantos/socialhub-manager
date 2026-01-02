<?php

namespace App\Enums;

enum EventLogLevel : string
{
    case INFO = 'info';
    case WARNING = 'warning';
    case ERROR = 'error';
}
