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
        Schema::create('colleges', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string('image');

            $table->text("description");
            $table->text("address");
            $table->text("city");
            $table->text("state");
            $table->text("postal_code");
            $table->foreignId("country_id")->constrained()->cascadeOnDelete();
            $table->string("website_url");
            $table->string("email")->unique();
            $table->string("phone")->unique();
            $table->integer("estd_year");
            $table->string("accreditation");
            $table->text("notes")->nullable();









            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('colleges');
    }
};
