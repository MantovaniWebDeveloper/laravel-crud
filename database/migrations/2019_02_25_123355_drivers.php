<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Drivers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //con il metodo create creo la tabella
        Schema::create('drivers', function(Blueprint $table) {
            //qui gli passo i campi della tabella, con tipo e valori di default (se servono)
            $table->increments('id');
            $table->string('name');
            $table->string('surname');
            $table->string('team');

        }

      );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //qui cancello la tabella 
        Schema::drop('drivers');
    }
}
