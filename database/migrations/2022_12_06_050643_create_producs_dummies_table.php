<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProducsDummiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producs_dummies', function (Blueprint $table) {
            $table->id();
            $table->string('product_head_name');
            $table->string('product_name');
            $table->string('product_price');
            $table->string('product_unit');
            $table->string('product_qty');
            $table->string('product_image');
            $table->longText('description');
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
        Schema::dropIfExists('producs_dummies');
    }
}
