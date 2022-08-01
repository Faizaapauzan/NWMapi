<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToJobAccessoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('job_accessories', function (Blueprint $table) {
            $table->foreign(['accessories_id'], 'job_accessories_ibfk_3')->references(['accessories_id'])->on('accessories_list')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['jobregister_id'], 'job_accessories_ibfk_2')->references(['jobregister_id'])->on('job_register')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('job_accessories', function (Blueprint $table) {
            $table->dropForeign('job_accessories_ibfk_3');
            $table->dropForeign('job_accessories_ibfk_2');
        });
    }
}
