<?php

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
        Schema::create('foods', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image');
            $table->string('other_location')->nullable();
            $table->foreignId('province_id')->nullable()->constrained(
                table: 'reg_provinces',
                indexName: 'foods_province_id'
            );
            $table->foreignId('regency_id')->nullable()->constrained(
                table: 'reg_regencies',
                indexName: 'foods_regency_id'
            );
            $table->foreignId('district_id')->nullable()->constrained(
                table: 'reg_districts',
                indexName: 'foods_district_id'
            );
            $table->foreignId('village_id')->nullable()->constrained(
                table: 'reg_villages',
                indexName: 'foods_village_id'
            );
            $table->string('slug')->unique();
            $table->text('body');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('foods');
    }
};
