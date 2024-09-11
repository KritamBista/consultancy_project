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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->String("name");
            $table->String("logo");
            $table->String("address");
            $table->String("contact_1");
            $table->String("contact_2");
            $table->String("email")->unique();
            $table->text('smtp_host')->nullable();
            $table->text('port')->nullable();
            $table->text('smtp_username')->nullable();
            $table->text('smtp_password')->nullable();
            $table->text('sms_api')->nullable();






            $table->String("facebook")->nullable();
            $table->String("LinkedIn")->nullable();
            $table->String("Instagram")->nullable();
            $table->String("map")->nullable();
            $table->String("pan no")->nullable();
            $table->String("establishment")->nullable();












            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
