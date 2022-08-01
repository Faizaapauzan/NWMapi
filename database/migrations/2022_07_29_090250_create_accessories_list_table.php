<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccessoriesListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accessories_list', function (Blueprint $table) {
            $table->integer('accessories_id', true);
            $table->string('accessories_code', 50)->nullable();
            $table->string('accessories_name', 200)->nullable();
            $table->string('accessories_uom', 20)->nullable();
            $table->string('accessories_brand', 100)->nullable();
            $table->string('accessories_description', 500)->nullable();
            $table->text('file_name')->nullable();
            $table->string('accessorieslistcreated_by', 20)->nullable();
            $table->timestamp('accessorieslistcreated_at')->nullable()->useCurrent();
            $table->string('accessorieslistlasmodify_by', 20)->nullable();
            $table->timestamp('accessorieslistlasmodify_at')->useCurrentOnUpdate()->nullable()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accessories_list');
    }
}
