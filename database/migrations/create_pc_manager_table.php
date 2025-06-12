<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
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

        Schema::create('pc_manager_card_add_sms_configs', function (Blueprint $table) {
            $table->id();
            $table->string('language')->nullable()->index()->comment('Use ISO 639-2 codes for language like using 3 words instead of 2');
            $table->string('ussd')->nullable()->comment('USSD-kod orqali');
            $table->string('hash')->comment('autocomplete uchun hash');
            $table->unsignedInteger('template_id')->nullable()->comment("Sms templateni qo'yish uchun ishlatiladi, birinchi bo'lib templateni berish kerak keyin ular o'zlari tomondan ro'yxatdan o'tkazadi va bizga shuni idsini berishadi")->index();
            $table->string('service_name')->comment('Sms qaysi servisdan kelyapganini aniqlashtirish uchun ishlatiladi');
            $table->string('processing_centre');
            $table->timestamps();
        });

        Schema::create('pc_manager_cards', function (Blueprint $table) {
            $table->string('id', 64)->primary();
            $table->text('encrypted_pan');
            $table->string('expiry_date');
            $table->string('phone_number')->index();
            $table->string('bin_code')->index();
            $table->string('card_token');
            $table->string('name_on_card');
            $table->string('name');
            $table->unsignedBigInteger('order');
            $table->boolean('is_main')->default(false);
            $table->string('processing_centre')->index();
            $table->string('local_owner_id')->index();
            $table->string('background_image')->nullable();
            $table->timestamps();
        });

    }

    public function down(): void
    {
        Schema::dropIfExists('pc_manager_card_add_processes');
        Schema::dropIfExists('pc_manager_card_add_sms_configs');
        Schema::dropIfExists('pc_manager_cards');

    }
};
