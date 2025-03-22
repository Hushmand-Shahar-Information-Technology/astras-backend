<?php

namespace App\Enum\TrainStation;

use App\Traits\UseValues;

enum Type: string
{
    use UseValues;

    case IMPORT = "واردات";
    case EXPORT = "صادرات";
}
