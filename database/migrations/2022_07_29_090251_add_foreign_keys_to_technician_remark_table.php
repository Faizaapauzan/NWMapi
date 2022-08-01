<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTechnicianRemarkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('technician_remark', function (Blueprint $table) {
            $table->foreign(['jobregister_id'], 'technician_remark_ibfk_1')->references(['jobregister_id'])->on('job_register');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('technician_remark', function (Blueprint $table) {
            $table->dropForeign('technician_remark_ibfk_1');
        });
    }
}
