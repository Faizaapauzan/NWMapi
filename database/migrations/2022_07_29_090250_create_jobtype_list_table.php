<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobtypeListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobtype_list', function (Blueprint $table) {
            $table->integer('jobtype_id', true);
            $table->string('job_code', 100);
            $table->string('job_name', 200);
            $table->string('job_description', 500)->nullable();
            $table->string('jobtypecreated_by', 15);
            $table->timestamp('jobtypecreated_at')->useCurrent();
            $table->string('jobtypelastmodify_by', 15);
            $table->timestamp('jobtypelastmodify_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobtype_list');
    }
}
