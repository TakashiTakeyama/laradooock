<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TodoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('todo')->insert([
                'title' => "タイトル１",
                'content' => "内容1",
                'status' => 1,
                'start_date' => Carbon::now(),
                'end_date' => Carbon::now(),
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now(),
                'user_id' => 1,
            ]);
        //
    }
}