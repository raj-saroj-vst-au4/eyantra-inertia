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
            $table->id(); // Creates an auto-incrementing primary key column named `id`
            $table->string('email')->unique(); // Creates a unique column named `email`
            $table->timestamp('lastlogin')->nullable(); // Creates a nullable timestamp column named `lastlogin`
            $table->boolean('signupcomplete')->default(false); // Creates a boolean column named `signupcomplete` with a default value of false
            $table->timestamps(); // Creates two columns: `created_at` and `updated_at` for timestamps
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
