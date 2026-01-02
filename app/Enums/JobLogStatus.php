<?php

namespace App\Enums;

enum JobLogStatus : string
{
    case SUCCESS = 'success';
    case FAILURE = 'failure';
}
