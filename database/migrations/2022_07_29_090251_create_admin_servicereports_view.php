<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateAdminServicereportsView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("CREATE VIEW `admin_servicereports` AS select `a`.`servicereport_id` AS `servicereport_id`,`a`.`date` AS `date`,`a`.`customer_name` AS `customer_name`,`a`.`cust_phone1` AS `cust_phone1`,`a`.`job_name` AS `job_name`,`a`.`job_assign` AS `job_assign`,`a`.`technician_arrival` AS `technician_arrival`,`a`.`technician_leaving` AS `technician_leaving`,`a`.`machine_name` AS `machine_name`,`a`.`serialnumber` AS `serialnumber`,`a`.`srvcreportnumber` AS `srvcreportnumber`,`a`.`report` AS `report`,`a`.`Issue_By` AS `Issue_By`,`a`.`cust` AS `cust`,`a`.`custphone` AS `custphone`,`a`.`Travel_Time` AS `Travel_Time`,`b`.`remark_desc` AS `remark_desc`,`b`.`remark_solution` AS `remark_solution` from (`nwmsystem`.`servicereport` `a` join `nwmsystem`.`technician_remark` `b`) where `a`.`jobregister_id` = `b`.`jobregister_id`");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW IF EXISTS `admin_servicereports`");
    }
}
