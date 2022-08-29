<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travels', function (Blueprint $table) {           
            $table->id();
            $table->date('order_date'); //La data in cui è avvenuto l'ordine
            $table->char('departure_company', 150)->nullable($value = true);
            $table->char('departure_ticket', 200)->nullable($value = true);   //Potrebbe essere anche un link che lo riporta alla pagina del biglietto            
            $table->char('hotel_name', 60);
            $table->text('hotel_info');
            $table->date('stay_start_date');
            $table->date('end_of_stay_date');
            $table->unsignedInteger('total_price');
            $table->boolean('paid'); //se il pagamento è avvenuto o lo sta ancora pagando
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
        Schema::dropIfExists('travels');
    }
}
