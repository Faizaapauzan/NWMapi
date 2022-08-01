<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('staff_fullname', 50)->nullable();
            $table->string('employee_id', 50)->nullable();
            $table->integer('staff_phone')->nullable();
            $table->string('staff_email', 30)->nullable();
            $table->enum('staff_position', ['', 'Admin', 'Manager', 'Technician', 'Storekeeper'])->nullable();
            $table->enum('staff_department', ['', 'Maintenance', 'Management', 'Store'])->nullable();
            $table->enum('staff_group', ['', 'Service', 'Management', 'Storekeeper'])->nullable();
            $table->string('username', 20)->nullable();
            $table->string('password', 20)->nullable();
            $table->rememberToken();
            $table->enum('technician_group', ['', '1st Leader', '2nd Leader', 'Assistant Leader'])->nullable();
            $table->enum('technician_rank', ['', '1st Leader', '2nd Leader', 'Assistant Leader'])->nullable();
            $table->string('job_ability', 500)->nullable();
            $table->string('tech_avai', 20)->index('tech_avai');
            $table->string('staffregistercreated_by', 20);
            $table->timestamp('staffregistercreated_at')->useCurrent();
            $table->string('staffregisterlastmodify_by', 20);
            $table->timestamp('staffregisterlastmodify_at')->useCurrentOnUpdate()->nullable()->useCurrent();

            $table->index(['id', 'staff_fullname', 'employee_id', 'staff_phone', 'staff_email', 'staff_position', 'staff_department', 'staff_group', 'username', 'password', 'technician_group', 'technician_rank', 'job_ability', 'staffregistercreated_by', 'staffregistercreated_at', 'staffregisterlastmodify_by', 'staffregisterlastmodify_at'], 'staffregister_id');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
