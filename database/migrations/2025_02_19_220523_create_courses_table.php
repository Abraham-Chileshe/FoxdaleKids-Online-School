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
        Schema::create('courses', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key (equivalent to `id INT AUTO_INCREMENT PRIMARY KEY`)
            $table->text('icon');
            $table->string('title', 255)->nullable(false); // VARCHAR(255) NOT NULL
            $table->text('description')->nullable(); // TEXT (nullable)
            $table->string('age', 191)->nullable(false);
            $table->decimal('price', 10, 2)->nullable(false); // DECIMAL(10, 2) NOT NULL
            $table->integer('lessons')->nullable(); // VARCHAR(50) (nullable);
            $table->text('reason')->nullable();
            $table->text('trial')->nullable();
            $table->text('Module_one')->nullable();
            $table->text('Module_two')->nullable();  
            $table->text('expectation')->nullable();  
            $table->timestamps(); // Adds `created_at` and `updated_at` columns
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
