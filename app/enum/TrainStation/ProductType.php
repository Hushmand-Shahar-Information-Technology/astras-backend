<?php

namespace App\enum\TrainStation;

use App\Traits\UseValues;

enum ProductType : string
{
    use UseValues;
    case DRY_GOODS = "مواد خشکه باب";
    case PETROLEUM_PRODUCTS = "مواد نفتی";
}
