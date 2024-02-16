<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Tenant;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $sub_domains = ['nepal','india','china'];

        foreach ($sub_domains as $name){
            Tenant::create([
                'name'=>$name,
                'domain'=>"$name.multi.com",
                'database'=>Str::random(10)
                           ]);
        }

        $this->call([
            UserSeeder::class
                    ]);
    }
}
