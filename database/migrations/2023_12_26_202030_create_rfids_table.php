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
        Schema::create('rfids', function (Blueprint $table) {
            $table->id();
            $table->string('c0');
            $table->string('c1');
            $table->string('c2');
            $table->string('c3');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->default(now())->useCurrent();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rfids');
    }
};
