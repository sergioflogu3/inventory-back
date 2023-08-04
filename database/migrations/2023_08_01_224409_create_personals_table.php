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
        Schema::create('personals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_person');
            $table->foreign('id_person')->references('id')->on('people')
                ->onDelete('cascade');
            $table->unsignedBigInteger('id_type_personal');
            $table->foreign('id_type_personal')->references('id')->on('type_personals')
                ->onDelete('cascade');
            $table->unsignedBigInteger('id_charge');
            $table->foreign('id_charge')->references('id')->on('charges')
                ->onDelete('cascade');
            $table->boolean('active')->default(true);
            $table->string('user_register');
            $table->string('number_ip');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personals');
    }
};
