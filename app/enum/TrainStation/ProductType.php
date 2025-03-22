<?php

namespace App\enum\TrainStation;

use App\Traits\UseValues;

enum ProductType : string
{
    use UseValues;
    case DRY_GOODS = "مواد خشکه باب";
    case PETROLEUM_PRODUCTS = "مواد نفتی";
        public static function values(): array{
        return array_map(fn($item)=>$item->value, self::cases());
    }
}
