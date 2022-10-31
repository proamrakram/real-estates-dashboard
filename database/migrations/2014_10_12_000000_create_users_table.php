<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string('phone')->unique();
            $table->string('email')->unique();
            $table->string('password');

            #info
            // $table->enum('user_type', ['admin', 'officer', 'finance', 'employee', 'monitored']);
            $table->boolean('is_admin')->default(true);
            $table->boolean('is_office')->default(false);
            $table->boolean('is_monitor')->default(false);
            $table->enum('user_status', ['active', 'inactive', 'blocked']);

            #permissions
            $table->boolean('can_add')->default(1);
            $table->boolean('can_edit')->default(1);
            $table->boolean('can_cancel')->default(1);
            $table->boolean('can_show_all')->default(1);
            $table->boolean('can_booking')->default(1);
            $table->boolean('can_send_sms')->default(1);

            #branches ids
            $table->json('branch_ids')->nullable();

            $table->text('hash_login')->nullable();
            $table->text('hash_expire')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
};
