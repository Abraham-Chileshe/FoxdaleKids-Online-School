<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrialLessonsTable extends Migration
{
    public function up()
    {
        Schema::create('trial_lessons', function (Blueprint $table) {
            $table->id();
            $table->string('child_full_name');
            $table->string('guardian_name');
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('child_age');
            $table->unsignedBigInteger('course_id');
            $table->string('country'); // Add this line for country
            $table->boolean('prior_experience')->default(false);
            $table->timestamps();

            // Foreign key constraint for course_id
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
            // Ensure InnoDB engine
            $table->engine = 'InnoDB';
        });
    }

    public function down()
    {
        Schema::dropIfExists('trial_lessons');
    }
}
