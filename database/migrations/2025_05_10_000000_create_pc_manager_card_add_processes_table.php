<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pc_manager_card_add_processes', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->text('encrypted_pan');
            $table->string('expiry_date');
            $table->string('phone_number');
            $table->string('bin');
            $table->string('name');
            $table->string('is_main');
            $table->string('local_owner_id');
            $table->string('order');
            $table->text('encrypted_confirmer');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pc_manager_card_add_processes');
    }
};
