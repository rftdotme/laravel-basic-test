<?php

use Illuminate\Database\Seeder;
use App\Models\Bid;
use App\Models\Event;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // 
        $this->call(EventsSeeder::class);
        $this->call(BidsSeeder::class);
    }
}


class EventsSeeder extends Seeder {
    public function run (){
    DB::table('events')->delete();
    event::create([
       'caption' => "Atlas Weekend"
    ]);
    event::create([
        'caption' => "Franz Ferdinand"
     ]);
     event::create([
        'caption' => "Milky Chance"
     ]);
     event::create([
        'caption' => "Faine misto"
     ]);
     event::create([
        'caption' => "Kiasmos"
     ]);
     event::create([
        'caption' => "Kodaine"
     ]);
     event::create([
        'caption' => "Three days grace"
     ]);
    }
}

class BidsSeeder extends Seeder {
    public function run (){
    DB::table('bids')->delete();
    $eventIDs = DB::table('events')->pluck('id');
    bid::create([
       
        'id_event'=> $eventIDs->random(),
       'name' => 'Olya',
       'email' => 'olya@gmail.com',
       'price' => '500',
    ]);
    bid::create([
        'id_event'=> $eventIDs->random(),
        'name' => 'Misha',
        'email' => 'Misha@gmail.com',
        'price' => '500'
     ]);
     bid::create([
        'id_event'=> $eventIDs->random(),
        'name' => 'Vadim',
        'email' => 'vadim@gmail.com',
        'price' => '700'
     ]);
     bid::create([
        'id_event'=> $eventIDs->random(),
        'name' => 'Dima',
        'email' => 'dima@gmail.com',
        'price' => '900'
     ]);
     bid::create([
        'id_event'=> $eventIDs->random(),
        'name' => 'Kolya',
        'email' => 'kolya@gmail.com',
        'price' => '1500'
     ]);
     bid::create([
        'id_event'=> $eventIDs->random(),
        'name' => 'Mary',
        'email' => 'mary@gmail.com',
        'price' => '1800'
     ]);


     bid::create([
       
        'id_event'=> $eventIDs->random(),
       'name' => 'Vasya',
       'email' => 'vasya@gmail.com',
       'price' => '500',
    ]);
    bid::create([
        'id_event'=> $eventIDs->random(),
        'name' => 'Jake',
        'email' => 'jake@gmail.com',
        'price' => '500'
     ]);
     bid::create([
        'id_event'=> $eventIDs->random(),
        'name' => 'Eugen',
        'email' => 'eugen@gmail.com',
        'price' => '700'
     ]);
     bid::create([
        'id_event'=> $eventIDs->random(),
        'name' => 'Ivan',
        'email' => 'ivan@gmail.com',
        'price' => '900'
     ]);
     bid::create([
        'id_event'=> $eventIDs->random(),
        'name' => 'Sasha',
        'email' => 'sahsa@gmail.com',
        'price' => '1500'
     ]);
     bid::create([
        'id_event'=> $eventIDs->random(),
        'name' => 'Tolya',
        'email' => 'tolya@gmail.com',
        'price' => '1800'
     ]);
    }
}