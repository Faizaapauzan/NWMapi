<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobRegisterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_register', function (Blueprint $table) {
            $table->integer('jobregister_id', true);
            $table->date('today_date')->useCurrent();
            $table->string('job_code', 100)->index('job_code');
            $table->string('job_name', 50)->index('job_name');
            $table->string('job_order_number', 50)->index('job_order_number');
            $table->string('job_description', 500);
            $table->integer('staffregister_id')->index('staffregister_id');
            $table->string('job_assign', 50)->index('job_assign');
            $table->enum('technician_rank', ['', '1st Leader', '2nd Leader', 'Assistant Leader'])->nullable();
            $table->enum('staff_position', ['', 'Admin', 'Manager', 'Technician', 'Storekeeper'])->nullable();
            $table->enum('job_cancel', ['', 'YES']);
            $table->string('Job_assistant', 50)->nullable();
            $table->string('Job_assistant2', 50);
            $table->string('Job_assistant3', 50);
            $table->string('Job_assistant4', 50);
            $table->enum('job_status', ['', 'Doing', 'Pending', 'Incomplete', 'Completed', 'Ready', 'Not Ready']);
            $table->string('reason', 500);
            $table->string('customer_code', 100)->index('customer_code');
            $table->string('customer_name', 200)->index('customer_name');
            $table->string('customer_grade', 50)->index('customer_grade');
            $table->integer('job_priority')->index('job_priority');
            $table->date('requested_date')->index('requested_date');
            $table->date('delivery_date')->index('delivery_date');
            $table->string('customer_PIC', 30)->index('customer_PIC');
            $table->string('cust_phone1', 15)->index('customer_phone');
            $table->string('cust_phone2', 15)->index('cust_phone2');
            $table->string('cust_address1', 500)->index('customer_address');
            $table->string('cust_address2', 500);
            $table->string('cust_address3', 500);
            $table->string('machine_code', 100)->index('machine_code');
            $table->string('machine_name', 200)->index('machine_name');
            $table->string('machine_type', 100)->index('machine_type');
            $table->string('machine_brand', 100)->index('machine_brand');
            $table->string('serialnumber', 100)->nullable()->index('serialnumber');
            $table->string('srvcreportdate', 50);
            $table->enum('accessories_required', ['', 'Yes', 'No']);
            $table->string('technician_departure', 50)->nullable()->index('technician_departure');
            $table->string('technician_arrival', 50)->nullable()->index('technician_arrival');
            $table->string('technician_leaving', 50)->nullable()->index('technician_leaving');
            $table->string('latitude', 50)->nullable();
            $table->string('longitude', 50)->nullable();
            $table->string('jobregistercreated_by', 30);
            $table->timestamp('jobregistercreated_at')->useCurrent();
            $table->string('jobregisterlastmodify_by', 30);
            $table->timestamp('jobregisterlastmodify_at')->useCurrentOnUpdate()->useCurrent();

            $table->index(['job_order_number'], 'job_order_number_2');
            $table->index(['srvcreportdate', 'accessories_required'], 'srvcreportdate');
            $table->index(['latitude', 'longitude'], 'latitude');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('job_register');
    }
}
