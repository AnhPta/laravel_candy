<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('customers', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->string('full_name',150)->unique();
        //     $table->string('email',150)->unique();
        //     $table->string('password');
        //     $table->string('address',150);
        //     $table->string('phone',12)->unique();
        //     $table->unsignedTinyInteger('status')->nullable()->default(1);
        //     $table->rememberToken();
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('customers');
    }
}
