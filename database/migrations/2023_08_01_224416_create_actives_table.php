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
        Schema::create('actives', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_property');
            $table->foreign('id_property')->references('id')->on('properties')
                ->onDelete('cascade');
            $table->unsignedBigInteger('id_project');
            $table->foreign('id_project')->references('id')->on('projects')
                ->onDelete('cascade');
            $table->string('number_series');
            $table->date('date_acquisition');
            $table->string('literal_code');
            $table->string('number_code');
            $table->string('detail');
            $table->integer('amount');
            $table->string('location');
            $table->decimal('buy_value');
            $table->string('observation');
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
        Schema::dropIfExists('actives');
    }
};
