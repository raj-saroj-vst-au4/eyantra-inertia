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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id(); // Creates an auto-incrementing primary key column named `id`
            $table->string('fullname'); // User's full name
            $table->string('email')->unique(); // Duplicate email for redundancy (consider alternatives)
            $table->integer('collegeid')->unsigned(); //  college ID
            $table->integer('departmentid')->unsigned(); // Foreign key to departments table
            $table->integer('designationid')->unsigned(); // Foreign key to designations table
            $table->string('address'); // User's address
            $table->string('pincode'); // Pincode for the address
            $table->timestamps(); // Creates `created_at` and `updated_at` columns
            $table->foreignId('user_id')->constrained(); // Foreign key constraint referencing users table
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
};
