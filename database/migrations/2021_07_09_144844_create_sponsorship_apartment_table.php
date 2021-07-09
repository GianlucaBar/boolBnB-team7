<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSponsorshipApartmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sponsorship_apartment', function (Blueprint $table) {
            $table->unsignedBigInteger('apartment_id');
            $table->foreign('apartment_id')->references('id')->on('apartments');
            $table->unsignedBigInteger('sponsorship_id');
            $table->foreign('sponsorship_id')->references('id')->on('sponsorships');

            $table->string('start_date', 20);
            $table->string('end_date', 20);
            $table->boolean('payment_status')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sponsorship_apartment', function (Blueprint $table) {
            $table->dropForeign('sponsorship_apartment_sponsorship_id_foreign');
            $table->dropForeign('sponsorship_apartment_apartment_id_foreign');
        });

        Schema::dropIfExists('sponsorship_apartment');
    }
}