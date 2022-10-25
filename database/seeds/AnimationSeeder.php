<?php

use Illuminate\Database\Seeder;

class AnimationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('animations')->insert([
            'id' => '1',
            'name' => '君の名は',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
    }
}
