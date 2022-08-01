<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTechOffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tech_off', function (Blueprint $table) {
            $table->foreign(['staffregister_id'], 'tech_off_ibfk_1')->references(['staffregister_id'])->on('staff_register')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tech_off', function (Blueprint $table) {
            $table->dropForeign('tech_off_ibfk_1');
        });
    }
}
