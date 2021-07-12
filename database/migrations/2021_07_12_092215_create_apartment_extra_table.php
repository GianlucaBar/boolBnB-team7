<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApartmentExtraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apartment_extra', function (Blueprint $table) {
            $table->unsignedBigInteger('apartment_id');
            $table->foreign('apartment_id')->references('id')->on('apartments');
            $table->unsignedBigInteger('extra_id');
            $table->foreign('extra_id')->references('id')->on('extras');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('apartment_extra', function (Blueprint $table) {
            $table->dropForeign('apartment_extra_extra_id_foreign');
            $table->dropForeign('apartment_extra_apartment_id_foreign');
        });

        Schema::dropIfExists('apartment_extra');
    }
}