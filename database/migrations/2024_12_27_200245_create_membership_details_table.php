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
        Schema::create('membership_details', function (Blueprint $table) {
            $table->id();
            $table->text('name')->nullable();
            $table->text('email')->nullable();
            $table->text('phone')->nullable();
            $table->text('interested_in_use')->nullable();
            $table->text('is_becoming_member')->nullable();
            $table->text('membershipType')->nullable();
            $table->text('assistence')->nullable();
            $table->text('services')->nullable();
            $table->text('goals')->nullable();
            $table->text('current_project')->nullable();
            $table->text('current_projectVal')->nullable();
            $table->text('tour')->nullable();
            $table->text('about')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('membership_details');
    }
};
