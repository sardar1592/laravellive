<?php

namespace Database\Seeders;

use App\Models\Event;
use App\Models\User;
use App\Models\Speaker;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       User::factory(20)->create();
        $events = Event::factory(10)->create();

        foreach($events as $event) {
            Speaker::factory(5)->create([
                'event_id' => $event->id,
            ]);
        }


    }
}
