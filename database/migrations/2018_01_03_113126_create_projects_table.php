<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('project_name');
            $table->string('client_name');
            $table->float('hour_rate');
            $table->enum('project_type', ['hourly', 'fixed']);
            $table->float('fixed_price');
            $table->string('phone');
            $table->text('description');
            $table->string('attachement1')->nullable;
            $table->string('attachement2')->nullable;
            $table->string('attachement3')->nullable;
            $table->string('attachement4')->nullable;
            $table->string('attachement5')->nullable;
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('projects');
    }
}
