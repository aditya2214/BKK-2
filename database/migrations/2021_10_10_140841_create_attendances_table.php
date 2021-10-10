<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttendancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendances', function (Blueprint $table) {
            $table->id();
            $table->integer('id_vacancy');
            $table->string('full_name',255);
            $table->string('gender',20);
            $table->string('active_email',50);
            $table->string('nik',20);
            $table->string('kabupaten',30);
            $table->text('address');
            $table->string('place',30);
            $table->date('date_and_place');
            $table->integer('age');
            $table->integer('height');
            $table->integer('weight');
            $table->string('school',100);
            $table->date('graduation_year');
            $table->text('experience');
            $table->string('no_handphone',20);
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
        Schema::dropIfExists('attendances');
    }
}
