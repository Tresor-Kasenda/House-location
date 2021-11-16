<?php
declare(strict_types=1);

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminApartmentSeeder extends Seeder
{
    public function run()
    {
        User::truncate();

        User::query()
            ->create([
               'name' => "scott",
                'surname' => "Tresor",
                'email' => "admin@location.com",
                'password' => Hash::make('scott'),
                'phone_number' => "0993242566"
            ]);
    }
}
