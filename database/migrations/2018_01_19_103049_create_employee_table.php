<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee', function (Blueprint $table) {
            // $table->unsignedInteger('id')->default(10001);
            $table->increments('id');
            $table->string('lastName', 5);
            $table->string('firstName', 5);
            $table->string('lastNameKana', 15);
            $table->string('firstNameKana', 15);
            $table->string('image', 100)->nullable();
            $table->string('comments', 300)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        // db raw で初期値設定した
        // DB::statement("create sequence employee_id_seq");
        DB::statement("alter table employee alter column id set default nextval('employee_id_seq');");
        DB::statement("select setval('employee_id_seq', 10001);");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employee');
    }
}
