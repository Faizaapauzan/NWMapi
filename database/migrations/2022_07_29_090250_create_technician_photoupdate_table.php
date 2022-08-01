<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTechnicianPhotoupdateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('technician_photoupdate', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('jobregister_id')->index('jobregister_id');
            $table->text('file_name')->nullable()->index('tech_photo');
            $table->string('description', 500)->nullable()->index('description');
            $table->text('file_after')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('technician_photoupdate');
    }
}
