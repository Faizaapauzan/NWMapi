<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicereportTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicereport', function (Blueprint $table) {
            $table->integer('servicereport_id', true);
            $table->integer('jobregister_id')->index('jobregister_id');
            $table->string('date', 20);
            $table->string('customer_name', 200);
            $table->string('cust_phone1', 20);
            $table->string('job_name', 100);
            $table->string('job_assign', 50);
            $table->string('technician_arrival', 100);
            $table->string('technician_leaving', 100);
            $table->string('machine_name', 200);
            $table->string('serialnumber', 100);
            $table->string('srvcreportnumber', 20);
            $table->string('report', 2000);
            $table->string('Issue_By', 200);
            $table->string('cust', 50);
            $table->string('custphone', 20);
            $table->string('Travel_Time', 50);
            $table->string('Problem_Description', 2000);
            $table->string('Submitted_Items', 2000);
            $table->date('today_date_report')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('servicereport');
    }
}
