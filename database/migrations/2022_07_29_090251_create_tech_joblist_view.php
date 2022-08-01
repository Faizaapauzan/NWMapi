<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateTechJoblistView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("CREATE VIEW `tech_joblist` AS select `nwmsystem`.`job_register`.`jobregister_id` AS `jobregister_id`,`nwmsystem`.`job_register`.`technician_rank` AS `technician_rank`,`nwmsystem`.`job_register`.`job_assign` AS `job_assign`,`nwmsystem`.`job_register`.`job_order_number` AS `job_order_number`,`nwmsystem`.`job_register`.`job_priority` AS `job_priority`,`nwmsystem`.`job_register`.`customer_name` AS `customer_name`,`nwmsystem`.`job_register`.`machine_type` AS `machine_type`,`nwmsystem`.`job_register`.`job_description` AS `job_description`,`nwmsystem`.`job_register`.`accessories_required` AS `accessories_required`,`nwmsystem`.`job_register`.`job_status` AS `job_status`,`nwmsystem`.`job_register`.`jobregisterlastmodify_at` AS `jobregisterlastmodify_at` from `nwmsystem`.`job_register` where `nwmsystem`.`job_register`.`technician_rank` = '1st Leader' or `nwmsystem`.`job_register`.`technician_rank` = '2nd Leader' order by `nwmsystem`.`job_register`.`jobregisterlastmodify_at` desc limit 0,500");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW IF EXISTS `tech_joblist`");
    }
}
