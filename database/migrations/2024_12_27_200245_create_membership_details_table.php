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
            $table->text('name');
            $table->text('email');
            $table->text('phone');
            $table->text('interested_in_use');
            $table->text('is_becoming_member');
            $table->text('membershipType');
            $table->text('assistence');
            $table->text('services');
            $table->text('goals');
            $table->text('current_project');
            $table->text('current_projectVal');
            $table->text('tour');
            $table->text('about');
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
