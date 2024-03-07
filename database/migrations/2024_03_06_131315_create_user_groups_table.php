<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('user_groups', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();
            $table->integer('group_id')->unsigned()->index();



            $table->integer('created_by')->unsigned()->index()->nullable();
            $table->integer('updated_by')->unsigned()->index()->nullable();
            $table->integer('deleted_by')->unsigned()->index()->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('restrict')
                ->onUpdate('cascade');
            $table->foreign('group_id')->references('id')->on('groups')
                ->onDelete('restrict')
                ->onUpdate('cascade');

            $table->foreign('created_by')->references('id')->on('users')
                ->onDelete('restrict')
                ->onUpdate('cascade');
            $table->foreign('updated_by')->references('id')->on('users')
                ->onDelete('restrict')
                ->onUpdate('cascade');
            $table->foreign('deleted_by')->references('id')->on('users')
                ->onDelete('restrict')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_groups');
    }
};
