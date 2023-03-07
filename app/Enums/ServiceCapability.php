<?php

namespace App\Enums;

enum ServiceCapability:string {
    case Unspecified = '';
    case Level1 = 'Level 1';
    case Level2 = 'Level 2';
    case Level3 = 'Level 3';
}