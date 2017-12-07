<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->string('telephone');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('adress');
            $table->string('postal');
            $table->string('city');
            $table->string('country_id');
            $table->string('delivery_first_name');
            $table->string('delivery_last_name');
            $table->string('delivery_adress');
            $table->string('delivery_postal');
            $table->string('delivery_city');
            $table->string('delivery_country_id');
            $table->string('company_name');
            $table->string('company_legal_form');
            $table->string('company_vat');
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
        Schema::dropIfExists('users');
    }
}
