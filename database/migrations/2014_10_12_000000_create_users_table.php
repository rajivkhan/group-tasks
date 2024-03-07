<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('users', function (Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->string('username')->nullable(); // mobile/stdid/stfid
			$table->string('password')->nullable();
			$table->rememberToken();
			$table->string('email')->nullable();
			$table->string('mobile')->nullable();
			$table->string('profile_image', 100)->nullable();
			$table->boolean('can_login')->default(1);

			$table->integer('created_by')->unsigned()->index()->nullable();
			$table->integer('updated_by')->unsigned()->index()->nullable();
			$table->integer('deleted_by')->unsigned()->index()->nullable();
			$table->timestamps();
			$table->softDeletes();

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
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('users');
	}
}
