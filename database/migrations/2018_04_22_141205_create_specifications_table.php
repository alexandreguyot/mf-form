<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatespecificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('specifications', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('company');
            $table->string('resp_name');
            $table->string('resp_firstname');
            $table->string('resp_tel');
            $table->string('resp_email');
            $table->string('website');
            $table->string('domain_have');
            $table->string('domain_name');
            $table->string('domain_wanted');
            $table->string('write_text');
            $table->string('have_picture');
            $table->string('number_pages');
            $table->string('graphic_have');
            $table->string('example');
            $table->string('description');
            $table->string('functionalities');
            $table->string('description_complementary');
            $table->timestamps();
        });

        /*
         *  Schema::create('specifications', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('company');
            $table->string('resp_name');
            $table->string('resp_firstname');
            $table->string('resp_tel');
            $table->string('resp_email');
            $table->integer('website');
            $table->boolean('domain_have');
            $table->string('domain_name');
            $table->string('domain_wanted');
            $table->boolean('write_text');
            $table->boolean('have_picture');
            $table->integer('number_pages');
            $table->boolean('graphic_have');
            $table->integer('example');
            $table->longText('description');
            $table->longText('functionalities');
            $table->longText('description_complementary');
            $table->timestamps();
        });
         * */
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('specifications');
    }

    public function user() {
        return $this->hasOne('App\User');
    }
}
