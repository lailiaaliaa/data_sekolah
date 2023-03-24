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

            Schema::create('employees', function (Blueprint $table) {
                $table->id();
                $table->integer('npsn');
                $table->string('namasekolah');
                $table->string('tingkat');
                $table->string('status');
                $table->string('jurusan');
                $table->string('logo')->nullable();
                $table->timestamps();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
};
