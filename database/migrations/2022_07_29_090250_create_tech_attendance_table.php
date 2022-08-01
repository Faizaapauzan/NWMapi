<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTechAttendanceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tech_attendance', function (Blueprint $table) {
            $table->integer('attID', true);
            $table->string('techname', 100);
            $table->string('att_date', 100);
            $table->string('clock_in', 100);
            $table->string('clock_out', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tech_attendance');
    }
}
