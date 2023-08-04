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
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_type_document');
            $table->foreign('id_type_document')->references('id')->on('type_documents')
                ->onDelete('cascade');
            $table->string('gender');
            $table->string('number_document');
            $table->string('complement', 2);
            $table->string('names');
            $table->string('last_name')->nullable();
            $table->string('second_name');
            $table->date('birth_date');
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
        Schema::dropIfExists('people');
    }
};
