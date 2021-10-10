<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CraeteFiguresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('figures', function (Blueprint $table) {
            $table->increments('id');
            $table->string('number_ank');
        });

           DB::table('figures')->insert(
            array(
                ['number_ank' => '1',],
                ['number_ank' => '2',],
                ['number_ank' => '3',],
                ['number_ank' => '4',],
                ['number_ank' => '5',],
                ['number_ank' => '6',],
                ['number_ank' => '7',],
                ['number_ank' => '8',],
                ['number_ank' => '9',],
                ['number_ank' => '10',],
            )
        );

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('figures');
    }
}
