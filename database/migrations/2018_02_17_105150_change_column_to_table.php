<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeColumnToTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('admin', function (Blueprint $table) {
            //
            $table->string('address')->nullable()->change();
            $table->integer('mobile')->nullable()->change();
            $table->string('photo')->nullable()->change();     
            $table->date('dob')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('admin', function (Blueprint $table) {
            //
        });
    }
}
