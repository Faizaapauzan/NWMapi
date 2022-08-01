<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToServicereportTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('servicereport', function (Blueprint $table) {
            $table->foreign(['jobregister_id'], 'servicereport_ibfk_1')->references(['jobregister_id'])->on('job_register')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('servicereport', function (Blueprint $table) {
            $table->dropForeign('servicereport_ibfk_1');
        });
    }
}
