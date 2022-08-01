<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTechOffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tech_off', function (Blueprint $table) {
            $table->integer('techOFF_id', true);
            $table->integer('staffregister_id');
            $table->string('tech_name', 100);
            $table->string('reason', 200);
            $table->string('date_from', 100);
            $table->string('date_to', 100);

            $table->index(['staffregister_id', 'tech_name', 'reason', 'date_from', 'date_to'], 'staffregister_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tech_off');
    }
}
