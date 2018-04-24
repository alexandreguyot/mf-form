<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpecificationsTable extends Migration
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
            $table->integer('website');
            $table->boolean('domain_have');
            $table->string('domain_name')->nullable();
            $table->string('domain_wanted')->nullable();
            $table->boolean('write_text');
            $table->boolean('have_picture');
            $table->integer('number_pages');
            $table->boolean('graphic_have');
            $table->integer('example');
            $table->longText('description')->nullable();
            $table->longText('functionalities')->nullable();
            $table->longText('description_complementary')->nullable();
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
        Schema::dropIfExists('specifications');
    }

    public function user() {
        return $this->hasOne('App\User');
    }
}
