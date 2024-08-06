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
            $table->text('smtp_host');
            $table->text('port');
            $table->text('smtp_username');
            $table->text('smtp_password');
            $table->text('sms_api');




            $table->text('');

            $table->String("facebook");
            $table->String("LinkedIn");
            $table->String("Instagram");
            $table->String("map");
            $table->String("pan no");
            $table->String("establishment");












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
