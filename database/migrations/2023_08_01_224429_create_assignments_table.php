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
        Schema::create('assignments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_project');
            $table->foreign('id_project')->references('id')->on('projects')
                ->onDelete('cascade');
            $table->unsignedBigInteger('id_personal');
            $table->foreign('id_personal')->references('id')->on('personals')
                ->onDelete('cascade');
            $table->unsignedBigInteger('id_active');
            $table->foreign('id_active')->references('id')->on('actives')
                ->onDelete('cascade');
            $table->string('name_city');
            $table->string('date');
            $table->string('state', 1);
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
        Schema::dropIfExists('assignments');
    }
};
