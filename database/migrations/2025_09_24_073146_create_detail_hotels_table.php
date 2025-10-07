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
                Schema::create('detail_hotels', function (Blueprint $table) {
            $table->id(); // otomatis bigint unsigned + auto_increment + primary key
            $table->string('name'); // otomatis bigint unsigned + auto_increment + primary key
            $table->foreignId('hotel_id')->constrained()->onDelete('cascade');
            $table->string('image')->nullable();
            $table->string('image2')->nullable();
            $table->string('image3')->nullable();
            $table->text('deskripsi')->nullable();
            $table->unsignedInteger('harga')->nullable(); // cukup unsigned integer, bukan auto_increment
            $table->string('alamat')->nullable();
            $table->decimal('latitude', 20, 8)->nullable();  // contoh: -6.2000000
            $table->decimal('longitude', 20,8 )->nullable(); // contoh: 106.8166667
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_hotels');
    }
};
