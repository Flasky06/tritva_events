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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longText('description')->nullable();
            $table->timestamp('start_date');
            $table->timestamp('end_date')->nullable();
            $table->integer('tickets_available')->default(0);
            $table->decimal('price', 8, 2)->default(0.00);
            $table->boolean('is_free');
            $table->unsignedBigInteger('created_by');
            $table->string('category')->nullable();
            $table->string('location_type')->nullable();
            $table->string('location')->nullable();
            $table->string('image_url')->nullable();
            $table->string('event_link')->nullable();
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
