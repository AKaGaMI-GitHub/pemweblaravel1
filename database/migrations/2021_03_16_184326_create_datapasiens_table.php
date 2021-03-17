<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatapasiensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datapasiens', function (Blueprint $table) {
            $table->id();
            $table->string('namaclient');
            $table->string('namahewan');
            $table->string('jenishewan');
            $table->string('jeniskelaminhewan');
            $table->text('jenistindakan');
            $table->string('alamat');
            $table->string('nohp');
            $table->date('waktu');
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
        Schema::dropIfExists('datapasiens');
    }
}
