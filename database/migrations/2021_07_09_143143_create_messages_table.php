<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->id();

            // FK
            $table->unsignedBigInteger('apartment_id');
            $table->foreign('apartment_id')
                  ->references('id')
                  ->on('apartments');

            $table->string('sender_email');
            $table->string('name', 60);
            $table->string('msg_subject');
            $table->text('msg_content');
            
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
        Schema::dropIfExists('messages');
    }
}
