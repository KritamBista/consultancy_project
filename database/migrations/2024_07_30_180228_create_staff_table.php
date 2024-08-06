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
        Schema::create('staff', function (Blueprint $table) {
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
            $table->string("position");
            $table->string("department");
            $table->date("employement_date");
            $table->decimal("salary");
            $table->enum("status",['active','inactive'])->default('inactive');
            






            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('staff');
    }
};
