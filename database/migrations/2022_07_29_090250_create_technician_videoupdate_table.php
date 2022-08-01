<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTechnicianVideoupdateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('technician_videoupdate', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('jobregister_id')->nullable()->index('jobregister_id');
            $table->string('video_url', 500)->nullable()->index('video_url');
            $table->string('description', 500)->nullable()->index('description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('technician_videoupdate');
    }
}
