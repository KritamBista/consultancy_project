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
            $table->String("logo")->nullable();
            $table->String("address")->nullable();
            $table->String("contact_1")->nullable();
            $table->String("contact_2")->nullable();
            $table->String("email")->unique();
            $table->text('smtp_host')->nullable();
            $table->text('port')->nullable();
            $table->text('smtp_username')->nullable();
            $table->text('smtp_password')->nullable();
            $table->text('sms_api')->nullable();
            $table->longText('documentation')->nullable();
            $table->longText('code_of_conduct')->nullable();
            $table->longText('pre_post_departure')->nullable();
            $table->longText('our_associations')->nullable();










            $table->String("facebook")->nullable();
            $table->String("LinkedIn")->nullable();
            $table->String("Instagram")->nullable();
            $table->String("whatsapp")->nullable();


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
