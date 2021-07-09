<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apartments', function (Blueprint $table) {
            $table->id();

            // FK
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
                  ->references('id')
                  ->on('users');

            $table->string('title');
            $table->text('description')->nullable();
            $table->tinyInteger('rooms');
            $table->tinyInteger('beds');
            $table->tinyInteger('baths');
            $table->smallInteger('square_meters')->nullable();
            $table->float('price', 8,2);
            $table->string('address');
            $table->string('latitude', 20);
            $table->string('longitude', 20);
            $table->string('cover')->nullable();
            $table->boolean('visible')->default(1);
            $table->string('slug')->unique();
            

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

        Schema::table('apartments', function (Blueprint $table) {

            $table->dropForeign('apartments_user_id_foreign');
            
        });

        Schema::dropIfExists('apartments');
    }
}
