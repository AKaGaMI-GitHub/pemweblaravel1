<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatadoktersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datadokters', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('jns_kelamin',20);
            $table->string('tmpt_lhr');
            $table->date('tgl_lhr');
            $table->string('phone',20);
            $table->string('agama',20);
            $table->string('status',20);
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
        Schema::dropIfExists('datadokters');
    }
}
