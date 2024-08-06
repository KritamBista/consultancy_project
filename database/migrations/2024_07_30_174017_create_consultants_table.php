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
        Schema::create('consultants', function (Blueprint $table) {
            $table->id();
            $table->string("first_name");
            $table->string("last_name");
            $table->date("dob");
            $table->string("gender");
            $table->string("address");
            $table->string("city");
            $table->string("state");
            $table->string("postalCode");
            $table->string("country");
            $table->string("phone_number");
            $table->string("email");
            $table->string("image");
            $table->string("qaultification");
            $table->string("experience");
            $table->string("specialisation");
            $table->date("joining date");
            $table->float("salary");
            $table->enum("status", ['active', 'inactive'])->default('active');
            $table->float("notes")->nullable();





















            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consultants');
    }
};
