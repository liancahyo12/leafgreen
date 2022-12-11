<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nama', 100);
            $table->string('logo');
            $table->string('alamat')->nullable();
            $table->string('email')->nullable();
            $table->string('no_telp')->nullable();
            $table->string('no_hp')->nullable();
            $table->integer('bplant')->nullable();
            $table->integer('tmixer')->nullable();
            $table->integer('cpump')->nullable();
            $table->integer('wloader')->nullable();
            $table->text('history')->nullable();
            $table->string('visi')->nullable();
            $table->text('misi')->nullable();
            $table->string('structure_org')->nullable();
            $table->text('ceo_greet')->nullable();
            $table->text('profile')->nullable();
            $table->tinyInteger('status')->default('1');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');
    }
};
