<?php

use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Migrations\Migration;

class SeedAdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@demo.com',
            'password' => Hash::make('studentAdmin'),
            'role' => 'administrator',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
