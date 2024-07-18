<?php

use App\Models\Technology;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('boolfolio_technology', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('boolfolio_id');
            $table->unsignedBigInteger('technology_id');

            $table->foreign('boolfolio_id')->references('id')->on('boolfolios')->cascadeOnDelete();
            $table->foreign('technology_id')->references('id')->on('Tecnologies')->cascadeOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('boolfolio_technology');
    }
};
