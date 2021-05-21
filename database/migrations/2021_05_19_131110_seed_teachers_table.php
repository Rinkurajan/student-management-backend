<?php

use App\Models\Teacher;
use Illuminate\Database\Migrations\Migration;


class SeedTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Teacher::create([
            'name' => 'Katie',
            'status' => 1,
        ]);

       Teacher::create([
            'name' => 'Max',
            'status' => 1,
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
