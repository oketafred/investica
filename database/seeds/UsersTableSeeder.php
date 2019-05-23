<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('roles')->insert([
            'slug' => 'admin',
            'name' => 'Admin',
            'permissions' => '',
            'created_at' => now(),
            'updated_at' => now(),
        ])) {
            // seed users
            $credentials = [
                'full_name' => 'Oketa Fred',
                'email' => 'oketafred@gmail.com',
                'vendor_code' => 'INVESTICA_ADMIN',
                'password' => 'admin'
            ];

            $user = Sentinel::registerAndActivate($credentials);
            $role = Sentinel::findRoleBySlug('admin');
            $role->users()->attach($user);
        }
    }
}
