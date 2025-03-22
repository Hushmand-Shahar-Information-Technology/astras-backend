<?php

namespace App\Enum\TrainStation;


enum Type: string
{

    case IMPORT = "واردات";
    case EXPORT = "صادرات";
    public static function values(): array
    {
        return array_map(fn($item) => $item->value, self::cases());
    }
}
