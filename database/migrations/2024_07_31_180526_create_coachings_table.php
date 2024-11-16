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
        Schema::create('coachings', function (Blueprint $table) {
            $table->id();
            $table->string("class_name");
            $table->string("description");
            $table->string("subject");
            $table->string("schedule")->nullable();
            $table->date("start_date");
            $table->date("end_date");
            $table->foreignId("teacher_id")->constrained()->cascadeOnDelete();
            $table->string("room")->nullable();
            $table->string("max_students")->nullable();
            $table->string("enrolled_students");
            $table->text("notes")->nullable();












            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coachings');
    }
};
