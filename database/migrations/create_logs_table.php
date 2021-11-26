<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('activity_log')->create('logs', function (Blueprint $table) {
            $table->id();

            $table->string('system_uid')->comment('The system from which this log comes.');
            $table->string('process')->comment('e.g. Class Name/Method(Request/Response)/Route');
            $table->string('contents')->comment('information about the action');
            $table->string('level')->comment('e.g. C(Critical)/E(Error)/W(Warning)/I(Info)');
            $table->string('file')->nullable()->comment('The file in which the log was called.');
            $table->json('data')->nullable()->comment("Data stored as serialized JSON");;

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
        Schema::dropIfExists('logs');
    }
}
