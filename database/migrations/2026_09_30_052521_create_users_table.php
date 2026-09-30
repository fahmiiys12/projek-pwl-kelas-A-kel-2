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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('npm')->unique()->nullable();
            $table->string('email')->unique();
            $table->string('whatsapp')->nullable();
            $table->string('semester')->nullable();
            $table->string('password');
            $table->enum('role', ['mahasiswa', 'organisasi', 'admin'])->default('mahasiswa');
            $table->enum('status_akun', ['active', 'inactive'])->default('active');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
