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
        Schema::create('leads', function (Blueprint $table) {
            $table->id();
            $table->string("slug")->unique();
            $table->string('image')->nullable();
            $table->string('user_id');
            $table->string('name');
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->enum('status', ['new', 'contacted','warm' ,'closed', 'lost'])->default('new');
            $table->string('note')->nullable();
            $table->enum('source', ['LinkedIn', 'Google', 'Referral', 'Other'])->nullable();
            $table->string('companyName')->nullable();
            $table->string('companyWebsite')->nullable();
            $table->string('companyLinkedin')->nullable();
            $table->string('companyEmail')->nullable();
            $table->string('userLinkedin')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */ 
    public function down(): void
    {
        Schema::dropIfExists('leads');
    }
};
