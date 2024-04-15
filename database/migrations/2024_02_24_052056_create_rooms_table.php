<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string('room_title')->nullable();
            $table->string('image')->nullable();
            $table->longText('description')->nullable();
            $table->float('price')->nullable(); // Change 'price' data type to float
            $table->string('wifi')->default('yes');
            $table->string('room_type')->nullable();
            $table->timestamps();
            // Remove the 'area', 'facilities', and 'bed_bath' columns as they are not present in the MySQL schema
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
}

