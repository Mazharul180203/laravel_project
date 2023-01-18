<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('catagory_id');
            $table->unsignedInteger('recruiter_id');
            $table->string('name');
            $table->string('email');
            $table->string('location');
            $table->string('institution');
            $table->string('exp');
            $table->string('link');
            $table->integer('active');
            $table->string('vacancy');
            $table->string('deadline');
            $table->mediumText('image')->nullable();

            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
