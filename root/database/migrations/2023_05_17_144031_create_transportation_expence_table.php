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
        Schema::create('transportation_expenses', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('user_id')->unique();
            $table->string('content');
            $table->integer('price');
            $table->integer('type_id');
            $table->string('section_from', 100);
            $table->string('section_to', 100);
            $table->string('cost_from',255);
            $table->string('cost_to',255);
            $table->string('total_costs', 255);
            $table->timestamps();
            $table->timestamp('deleted_at');
        });

        Schema::table('transportation_expenses', function(Blueprint $table){
            $table->primary(['id','total_costs']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transportation_expence');
    }
};
