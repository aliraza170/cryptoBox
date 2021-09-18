<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('phone');
            $table->timestamp('phone_verified_at')->nullable();
            $table->string('two_factor_code', 6)->nullable();
            $table->dateTime('two_factor_expires_at')->nullable();
            $table->unsignedInteger('two_factor_auth_type')->default(1);
            $table->string('password');
            $table->rememberToken();
            $table->date('date_of_birth')->nullable();
            $table->string('address_line', 255)->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('post_code')->nullable();
            $table->string('country')->nullable();
            $table->text('profile_picture')->nullable();
            $table->text('id_card_front')->nullable();
            $table->text('id_card_back')->nullable();
            $table->string('nic_number')->nullable();
            $table->string('timezone')->nullable();
            $table->string('currency')->nullable();
            $table->boolean('recieve_currency_notifications')->default(false);
            $table->boolean('recieve_merchant_notifications')->default(false);
            $table->boolean('recieve_recommendation_notifications')->default(false);
            $table->integer('verfication_level')->default(0);
            $table->datetime('last_login_time')->nullable();
            $table->datetime('last_login_ip')->nullable();
            $table->integer('status')->default(1);
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
        Schema::dropIfExists('users');
    }
}
