<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Type::create(['name'=>'public_trips' , 'id'=> 1]);
        Type::create(['name'=>'private_trips' , 'id' =>2]);

    }
}
