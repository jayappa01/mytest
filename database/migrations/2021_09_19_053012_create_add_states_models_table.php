<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CraeteStatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('states', function (Blueprint $table) {
            $table->increments('id');
            $table->string('state_code');
            $table->string('state');
        });

           DB::table('states')->insert(
            array(
                ['state_code' => 'AN','state'=>'Andaman and Nicobar Islands'],
                ['state_code' => 'AP','state'=>'Andhra Pradesh'],
                ['state_code' => 'AS','state'=>'Assam'],
                ['state_code' => 'BR','state'=>'Bihar'],
                ['state_code' => 'CH','state'=>'Chandigarh'],
                ['state_code' => 'CT','state'=>'Chhattisgarh'],
                ['state_code' => 'DN','state'=>'Dadra and Nagar Haveli'],
                ['state_code' => 'DD','state'=>'Daman and Diu'],
                ['state_code' => 'DL','state'=>'Delhi'],
                ['state_code' => 'GA','state'=>'Goa'],
                ['state_code' => 'GJ','state'=>'Gujarat'],
                ['state_code' => 'HR','state'=>'Haryana'],
               ['state_code' => 'HP','state'=>'Himachal Pradesh'],
                ['state_code' => 'JK','state'=>'Jammu and Kashmir'],
                ['state_code' => 'JH','state'=>'Jharkhand'],
                ['state_code' => 'KA','state'=>'Karnataka'],
                ['state_code' => 'KL','state'=>'Kerala'],
                ['state_code' => 'LD','state'=>'Lakshadweep'],
                ['state_code' => 'MP','state'=>'Madhya Pradesh'],
                ['state_code' => 'MH','state'=>'Maharashtra'],
                ['state_code' => 'ML','state'=>'Meghalaya'],
                ['state_code' => 'MN','state'=>'Manipur'],
                ['state_code' => 'MZ','state'=>'Mizoram'],
                ['state_code' => 'NL','state'=>'Nagaland'],

               ['state_code' => 'OR','state'=>'Odisha'],
                ['state_code' => 'PY','state'=>'Puducherry'],
                ['state_code' => 'PB','state'=>'Punjab'],
                ['state_code' => 'RJ','state'=>'Rajasthan'],
                ['state_code' => 'SK','state'=>'Sikkim'],
                ['state_code' => 'TN','state'=>'Tamil Nadu'],
                ['state_code' => 'TG','state'=>'Telangana'],
                ['state_code' => 'TR','state'=>'Tripura'],
                ['state_code' => 'UP','state'=>'Uttar Pradesh'],
                ['state_code' => 'UT','state'=>'Uttarakhand'],
                ['state_code' => 'WB','state'=>'West Bengal'],
               
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
        Schema::dropIfExists('states');
    }
}
