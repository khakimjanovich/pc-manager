<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pc_cards', function (Blueprint $table) {
            $table->string('id', 64)->primary();
            $table->text('encrypted_pan');
            $table->string('expiry_date');
            $table->string('phone_number');
            $table->string('bin');
            $table->string('card_token');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pc_cards');
    }
};
