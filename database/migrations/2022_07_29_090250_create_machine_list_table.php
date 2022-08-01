<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMachineListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('machine_list', function (Blueprint $table) {
            $table->integer('machine_id', true);
            $table->string('customer_name', 100)->nullable();
            $table->string('machine_code', 100)->nullable();
            $table->string('machine_brand', 100)->nullable();
            $table->string('machine_type', 100)->nullable();
            $table->string('serialnumber', 100)->nullable();
            $table->date('purchase_date')->nullable();
            $table->string('machine_name', 200)->nullable();
            $table->string('machine_description', 500)->nullable();
            $table->string('machinelistcreated_by', 15)->nullable();
            $table->timestamp('machinelistcreated_at')->nullable()->useCurrent();
            $table->string('machinelistlastmodify_by', 20)->nullable();
            $table->timestamp('machinelistlastmodify_at')->useCurrentOnUpdate()->nullable()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('machine_list');
    }
}
