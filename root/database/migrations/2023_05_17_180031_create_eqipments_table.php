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
        Schema::create('eqipments', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->unique();
            $table->datetime('date');
            $table->string('equipment_price',255);
            $table->string('equipment_content', 255);
            $table->integer('equipment_id');
            $table->datetime('purchase_date');
            $table->timestamps();
            $table->timestamp('deleted_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eqipments');
    }
};
