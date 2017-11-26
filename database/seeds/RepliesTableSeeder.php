<?php

use Illuminate\Database\Seeder;
use App\Reply;
use App\Thread;

class RepliesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Thread::all()->each(function ($thread) {
            factory(Reply::class)->create(['thread_id' => $thread->id]);
        });
    }
}
