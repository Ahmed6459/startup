<?php

use Illuminate\Database\Seeder;

class ArticalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Artical::class, 3)->create();
        factory(App\User::class, 3)->create();
    }
}
