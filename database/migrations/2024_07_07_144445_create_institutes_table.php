<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstitutesTable extends Migration
{
    public function up()
    {
        Schema::create('institutes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address');
            $table->year('established');
            $table->integer('total_students');
            $table->integer('male_students');
            $table->integer('female_students');
            $table->integer('total_courses');
            $table->string('popular_courses');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('institutes');
    }
}

