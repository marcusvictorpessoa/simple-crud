<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('medical_record', 20)->nullable();
            $table->string('phone', 20)->nullable();
            $table->string('cel', 20)->nullable();
            $table->string('zipcode')->nullable();
            $table->string('address')->nullable();
            $table->string('complement')->nullable();
            $table->string('address_number')->nullable();
            $table->string('district')->nullable();
            $table->string('state', 255)->nullable();
            $table->string('city')->nullable();
            $table->string('birth')->nullable();
            $table->string('age')->nullable();
            $table->string('gender')->nullable();
            $table->string('rg')->nullable();
            $table->string('organ_rg')->nullable();
            $table->string('cpf', 20)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
