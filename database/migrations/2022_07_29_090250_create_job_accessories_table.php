<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobAccessoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_accessories', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('jobregister_id')->nullable();
            $table->integer('accessories_id')->nullable()->index('accessories_id');
            $table->string('accessories_code', 50);
            $table->string('accessories_name', 200);
            $table->string('accessories_uom', 20)->nullable();
            $table->integer('accessories_quantity')->nullable();
            $table->enum('accessories_status', ['', 'Ready', 'Not Ready'])->nullable()->index('accessories_status');
            $table->string('accessories_remark', 500)->index('accessories_remark');
            $table->timestamp('accessoriesregister_at')->useCurrent();
            $table->timestamp('accessoriesmodify_at')->useCurrentOnUpdate()->useCurrent();

            $table->index(['accessories_code', 'accessories_name'], 'accessories_code');
            $table->index(['jobregister_id', 'accessories_id', 'accessories_quantity'], 'jobregister_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('job_accessories');
    }
}
