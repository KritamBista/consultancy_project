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
        Schema::create('teachers', function (Blueprint $table) {
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
            $table->string("qualifiaction");
            $table->string("experience");
            $table->string("subject_taught");
            $table->date("joining_date");
            $table->float("salary");
            $table->enum("status", ['active', 'inactive'])->default('inactive');
            $table->text("notes")->nullable();









            $table->timestamps();



            // Employment Information:
            //     qualification: string
            //     experience: string (years of experience)
            //     subjects_taught: text
            //     joining_date: date
            //     salary: decimal
            //     status: string (Active, Inactive)
            //     notes: text (additional information)
            //     created_at: timestamp
            //     updated_at: timestamp
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
