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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onUpdate('cascade')->onDelete('cascade');;
            $table->string('Fname')->nullable();
            $table->string('Lname')->nullable();
            $table->enum('gender',['Laki-Laki','Perempuan'])->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->string('profile_icon')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};