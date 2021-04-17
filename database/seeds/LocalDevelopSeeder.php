<?php

use Illuminate\Database\Seeder;

class LocalDevelopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Eloquents\Friend::class, 3)
            ->create()
            ->each(function ($friend) {
                factory(\App\Eloquents\FriendsRelationship::class, 3)->create([
                    'own_friends_id' => $friend->id,
                ]);

                factory(\App\Eloquents\Pin::class)->create([
                    'friends_id' => $friend->id,
                ]);
            });

        \Artisan::call('passport:client --password --provider users');
    }
}
