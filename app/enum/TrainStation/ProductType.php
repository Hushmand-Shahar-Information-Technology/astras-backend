<?php

namespace App\enum\TrainStation;


enum ProductType : string
{
    case DRY_GOODS = "مواد خشکه باب";
    case PETROLEUM_PRODUCTS = "مواد نفتی";
        public static function values(): array{
        return array_map(fn($item)=>$item->value, self::cases());
    }
}
