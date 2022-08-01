<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTechnicianRemarkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('technician_remark', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('jobregister_id');
            $table->string('remark_desc', 500)->nullable();
            $table->string('remark_solution', 200)->nullable();

            $table->index(['jobregister_id', 'remark_desc', 'remark_solution'], 'jobregister_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('technician_remark');
    }
}
