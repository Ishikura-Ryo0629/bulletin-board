<?php

use Illuminate\Database\Seeder;
use App\Thread;

class ThreadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('threads')->insert([
            'title' => 'テスト',
            'body' => 'これはテストです。',
            'user_id' => '1',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
