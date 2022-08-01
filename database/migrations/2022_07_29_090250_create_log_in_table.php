<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogInTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('log_in', function (Blueprint $table) {
            $table->integer('login_id', true);
            $table->string('username', 30)->nullable()->index('username');
            $table->string('staff_position', 20)->index('staff_position');
            $table->string('password', 20)->index('password');
            $table->timestamp('log_in_at')->useCurrentOnUpdate()->useCurrent()->index('log_in_at');

            $table->index(['login_id'], 'login_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('log_in');
    }
}
