<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTechnicianResthourTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('technician_resthour', function (Blueprint $table) {
            $table->integer('resthour_id', true);
            $table->string('technician', 100)->nullable()->index('technician');
            $table->string('tech_out', 100)->nullable();
            $table->string('tech_in', 100)->nullable();
            $table->string('Ass_1', 100)->nullable();
            $table->string('Ass1_out', 100)->nullable();
            $table->string('Ass1_in', 100)->nullable();
            $table->string('Ass_2', 100)->nullable();
            $table->string('Ass2_out', 100)->nullable();
            $table->string('Ass2_in', 100)->nullable();
            $table->string('Ass_3', 100)->nullable();
            $table->string('Ass3_out', 100)->nullable();
            $table->string('Ass3_in', 100)->nullable();
            $table->string('Ass_4', 100)->nullable();
            $table->string('Ass4_out', 100)->nullable();
            $table->string('Ass4_in', 100)->nullable();
            $table->string('today_date', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('technician_resthour');
    }
}
