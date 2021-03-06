<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->truncate();
        Role::create([
            'name' => 'Client',
            'slug' => 'client',
        ]);

        Role::create([
            'name' => 'Vendor',
            'slug' => 'vendor',
        ]);
    }
}
