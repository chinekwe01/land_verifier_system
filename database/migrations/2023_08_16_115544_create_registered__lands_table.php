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
        Schema::create('registered__lands', function (Blueprint $table) {
            $table->id();
            $table->string('registration_number');
            $table->string('beacon');
            $table->string('survey_plan');
            $table->longText('deals');
            $table->date('date_registered');
            $table->string('owner');
            $table->string('formerOwner');
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
        Schema::dropIfExists('registered__lands');
    }
};
