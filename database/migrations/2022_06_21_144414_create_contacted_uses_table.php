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
        Schema::create('contacted_uses', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nama', 100);
            $table->string('email', 100);
            $table->string('no_hp', 100);
            $table->string('content')->nullable();
            $table->tinyInteger('contacted_status')->default('1')->comment('1=baru', '2=dibaca, 3=dibalas');
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
        Schema::dropIfExists('contacted_uses');
    }
};
