<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreatePropAttribDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prop_attrib_details', function (Blueprint $table) {
            // PropAttribDetail(propAttribDetailId, propAtrribute,Title, PropertyCode)

            $table->bigIncrements('propAttribDetailId');
            $table->string('propAttributeDetail', 200);

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
        Schema::dropIfExists('prop_attrib_details');
    }
}
