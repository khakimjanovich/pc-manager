<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pc_manager_card_add_sms_configs', function (Blueprint $table) {
            $table->id();
            $table->string('language')->nullable()->index()->comment('Use ISO 639-2 codes for language like using 3 words instead of 2');
            $table->string('ussd')->nullable()->comment('USSD-kod orqali');
            $table->string('hash')->comment('autocomplete uchun hash');
            $table->unsignedInteger('template_id')->comment("Sms templateni qo'yish uchun ishlatiladi, birinchi bo'lib templateni berish kerak keyin ular o'zlari tomondan ro'yxatdan o'tkazadi va bizga shuni idsini berishadi")->index();
            $table->string('service_name')->comment('Sms qaysi servisdan kelyapganini aniqlashtirish uchun ishlatiladi');
            $table->string('processing_centre');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pc_manager_card_add_sms_configs');
    }
};
