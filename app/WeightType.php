<?php

namespace App;

use App\Traits\UseValues;

enum WeightType: string
{
    use UseValues;

    case TON = 'TON';
    case KG = 'KG';

}
