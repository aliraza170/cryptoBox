<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCurrencyWalletsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('currency_wallets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('name', 255);
            $table->string('currency', 5);
            $table->decimal('balance', 12, 2)->default(0);
            $table->decimal('escrow_balance', 12, 2)->default(0);
            $table->decimal('daily_send_limit', 12, 2)->nullable();
            $table->decimal('daily_recieve_limit', 12, 2)->nullable();
            $table->decimal('monthly_send_limit', 12, 2)->nullable();
            $table->decimal('monthly_recieve_limit', 12, 2)->nullable();
            $table->decimal('yearly_send_limit', 12, 2)->nullable();
            $table->decimal('yearly_recieve_limit', 12, 2)->nullable();
            $table->timestamps();

            //Create DB foreign key reference
            $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('currency_wallets');
    }
}
