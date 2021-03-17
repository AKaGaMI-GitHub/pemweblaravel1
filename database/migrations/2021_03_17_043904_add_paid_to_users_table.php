<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPaidToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('datapasiens', function (Blueprint $table) {
            $table->string('jeniskelaminhewan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('datapasiens', function (Blueprint $table) {
            $table->dropColumn('jeniskelaminhewan');
        });
    }
}
