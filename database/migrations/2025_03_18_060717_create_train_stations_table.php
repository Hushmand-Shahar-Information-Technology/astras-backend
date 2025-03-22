<?php

use App\WeightType;
use App\Enum\TrainStation\Type;
use App\enum\TrainStation\ProductType;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('train_stations', function (Blueprint $table) {
            $table->id();
            $table->enum('type', Type::values())->nullable();
            $table->enum('product_type', ProductType::values())->nullable();
            $table->foreignId('company_id')->nullable()->constrained()->nullOnDelete();
            $table->foreignId('user_id')->nullable()->constrained()->nullOnDelete();
            $table->foreignId('product_id')->nullable()->constrained()->nullOnDelete();
            $table->foreignId('country_from_id')->nullable()->constrained('countries')->nullOnDelete();
            $table->foreignId('country_to_id')->nullable()->constrained('countries')->nullOnDelete();
            $table->integer('number_of_wagon');
            $table->decimal('weight', 10, 2);
            // $table->enum('weight_type', App\WeightType::values())->default('kg');
            $table->integer('number_of_bar');
            $table->date('date_of_out');
            $table->date('date_of_in');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('train_stations');
    }
};
