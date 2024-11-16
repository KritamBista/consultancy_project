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
        Schema::create('universities', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->text('address');
            $table->string('image');
            $table->text('city');
            $table->text('state');
            $table->text('postal_code');
            $table->foreignId('country_id')->constrained()->cascadeOnDelete();
            $table->integer("estd_year");

            $table->string("webiste");
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
        Schema::dropIfExists('universities');
    }
};
