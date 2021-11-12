<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profil_admins', function (Blueprint $table) {
            $table->id();
            $table->integer('id_user')->nullable();
            $table->string('foto',255)->nullable();
            $table->string('wa',20)->nullable();
            $table->string('facebook',255)->nullable();
            $table->string('instagram',255)->nullable();
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
        Schema::dropIfExists('profil_admins');
    }
}
