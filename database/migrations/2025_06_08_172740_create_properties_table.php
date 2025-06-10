<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('location');
            $table->string('city');
            $table->string('country');
            $table->integer('no_of_bedroom');
            $table->integer('no_of_toilet');
            $table->decimal('price', 20, 2);
            $table->string('property_type');
            $table->boolean('status');
            $table->boolean('banned')->default(false);
            $table->string('size');
            $table->text('description');
            $table->boolean('featured')->default(false);
            $table->integer('count_view')->default(0)->comment('This count the number of people who has view the property');                                          
            $table->string('image_1');
            $table->string('image_2');
            $table->string('image_3');
            $table->string('image_4');
            $table->string('image_5');
            $table->string('image_6');
            $table->string('image_7');
            $table->string('image_8');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
