<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateServiceReportView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("CREATE VIEW `service_report` AS select `a`.`jobregister_id` AS `jobregister_id`,`a`.`job_order_number` AS `job_order_number`,`a`.`job_name` AS `job_name`,`a`.`job_assign` AS `job_assign`,`a`.`customer_name` AS `customer_name`,`a`.`cust_phone1` AS `cust_phone1`,`a`.`machine_name` AS `machine_name`,`a`.`serialnumber` AS `serialnumber`,`a`.`technician_arrival` AS `technician_arrival`,`a`.`technician_departure` AS `technician_departure`,`a`.`technician_leaving` AS `technician_leaving`,`a`.`srvcreportdate` AS `srvcreportdate`,`a`.`requested_date` AS `requested_date`,`b`.`remark_desc` AS `remark_desc`,`b`.`remark_solution` AS `remark_solution` from (`nwmsystem`.`job_register` `a` join `nwmsystem`.`technician_remark` `b`) where `a`.`jobregister_id` = `b`.`jobregister_id`");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW IF EXISTS `service_report`");
    }
}
