<?php

use App\Helpers\UserRole;
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
            $table->string('full_name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('phone_number',20)->nullable();
            $table->string('country_phone_code',5)->nullable();
            $table->enum('gender',[0,1])->nullable(); // 0:male ,1:female
            $table->boolean('is_active')->default(true);
            $table->tinyInteger('role')->default(UserRole::User);
            $table->date('birthday')->nullable();
            $table->string('lang',5)->nullable();
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
}
