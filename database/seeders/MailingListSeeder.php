<?php

namespace Database\Seeders;

use App\Models\MailingList;
use App\Models\Subscriber;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MailingListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MailingList::factory(50000)->create()
            ->each(function ($mailingList) {
                Subscriber::factory(1)->create(['mailing_list_id' => $mailingList->id, 'added_by' => User::all()->random()->id]);
            });
    }
}
