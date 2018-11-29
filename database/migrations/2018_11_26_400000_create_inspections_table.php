<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInspectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inspections', function (Blueprint $table) {
            $table->increments('id');
            $table->uuid('uuid');
            $table->unsignedInteger('site_id');
            $table->unsignedTinyInteger('inspection_status_id');
            $table->unsignedTinyInteger('inspection_type_id');
            $table->unsignedInteger('inspector_id');
            $table->unsignedInteger('inspection_recurrence_id')->nullable();
            $table->boolean('auto_complete')->default(false);
            $table->text('comments');
            $table->dateTime('scheduled_at');
            $table->dateTime('started_at')->nullable();
            $table->dateTime('ended_at')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('site_id')->references('id')->on('sites')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('inspection_status_id')->references('id')->on('inspection_statuses');
            $table->foreign('inspection_type_id')->references('id')->on('inspection_types');
            $table->foreign('inspector_id')->references('id')->on('users')->onUpdate('cascade');
            $table->foreign('inspection_recurrence_id')->references('id')->on('inspection_recurrences')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inspections');
    }
}
