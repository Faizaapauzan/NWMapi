<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_list', function (Blueprint $table) {
            $table->integer('customer_id', true);
            $table->string('customer_code', 100)->nullable();
            $table->string('customer_name', 200)->nullable();
            $table->string('customer_grade', 50)->nullable();
            $table->string('customer_PIC', 50)->nullable();
            $table->string('cust_phone1', 50)->nullable();
            $table->string('cust_phone2', 100)->nullable();
            $table->string('cust_address1', 500)->nullable();
            $table->string('cust_address2', 500)->nullable();
            $table->string('cust_address3', 500)->nullable();
            $table->string('customercreated_by', 20)->nullable();
            $table->timestamp('customercreated_at')->nullable()->useCurrent();
            $table->string('customerlasmodify_by', 20)->nullable();
            $table->timestamp('customerlasmodify_at')->useCurrentOnUpdate()->nullable()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer_list');
    }
}
