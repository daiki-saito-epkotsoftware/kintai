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
            $table->id();
            $table->string('last_name');
            $table->string('first_name',100);
            $table->string('last_name_kana');
            $table->string('first_name_kana');
            $table->integer('role_id');
            $table->integer('prefecture')->nullable();
            $table->string('address1',255)->nullable();
            $table->string('address2',255)->nullable();
            $table->string('email',255);
            $table->string('email_verified_at',255);
            $table->string('password',100);
            $table->string('remember_token',255);
            $table->date('join_date');
            $table->timestamps();
        });

        Schema::table('users', function(Blueprint $table){
            $table->string('email',255)->unique()->change();
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
