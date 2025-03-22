<?php

namespace App\Enum\TrainStation;

use App\Traits\UseValues;

enum Type: string
{
    use UseValues;

    case IMPORT = "واردات";
    case EXPORT = "صادرات";
    
    /**
     * Get all values of the enum.
     *
     * @return array
     */
    public static function values(): array
    {
        return array_map(fn($item) => $item->value, self::cases());
    }
}
