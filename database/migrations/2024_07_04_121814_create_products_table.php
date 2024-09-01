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
        Schema::create('products', function (Blueprint $table) {
            $table->id();

            $table->string('pname');
            $table->string('title');
            $table->string('description');
            $table->string('regprice');
            $table->string('saleprice');
            $table->string('tax');
            $table->string('category');
            $table->string('mainimage');
            $table->string('image1');
            $table->string('image2');
            $table->string('image3');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
