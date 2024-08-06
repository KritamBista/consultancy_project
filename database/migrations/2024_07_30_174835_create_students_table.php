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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string("first_name");
            $table->string("last_name");
            $table->date("date_of_birth");
            $table->string("gender");
            $table->string("address");
            $table->string("city");
            $table->string("state");
            $table->string("postal_code");
            $table->string("country");
            $table->string("phone_number");
            $table->string("email");
            $table->string("image");
            $table->string("previous_school");
            $table->string("highest qualification");
            $table->string("grades");
            $table->string("preferred_country");
            $table->string("preferred_university");
            $table->string("course_of_interest");
            $table->string("langauge_profeciency");
            $table->foreignId("consultant_id")->constrained()->cascadeOnDelete();
            $table->enum('application_status',['initial','in_progress','submitted','accepted','rejected'])->default('initial');
            $table->text("notes")->nullable();




















            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
