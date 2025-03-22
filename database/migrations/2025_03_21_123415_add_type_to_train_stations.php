<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\enum\TrainStation\Type;
use App\enum\TrainStation\ProductType;
return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('train_stations', function (Blueprint $table) {
            $table->enum('type', Type::values())->nullable();
            $table->enum('product_type', ProductType::values())->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('train_stations', function (Blueprint $table) {
            //
        });
    }
};
