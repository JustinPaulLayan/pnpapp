<?php

use App\User;
use App\Types\RoleType;
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
        $user = User::create([
            'first_name' => 'admin',
            'last_name' => 'Testing',
            'rank_id' => 1,
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Beatae quas id est commodi? Enim officiis tempore, consectetur dolore, pariatur, laborum tempora repellendus doloribus architecto eaque iusto vel cumque temporibus dolorem?',
            'email' => 'admin@mail.com',
            'password' => bcrypt('123123')
        ]);

        $user->assignRole(RoleType::ADMIN);

        $user = User::create([
            'first_name' => 'Police',
            'last_name' => 'Testing',
            'rank_id' => 1,
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Beatae quas id est commodi? Enim officiis tempore, consectetur dolore, pariatur, laborum tempora repellendus doloribus architecto eaque iusto vel cumque temporibus dolorem?',
            'email' => 'police@mail.com',
            'password' => bcrypt('123123')
        ]);

        $user->assignRole(RoleType::POLICEADMIN);

        $user = User::create([
            'first_name' => 'Police',
            'last_name' => 'Testing',
            'rank_id' => 5,
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Beatae quas id est commodi? Enim officiis tempore, consectetur dolore, pariatur, laborum tempora repellendus doloribus architecto eaque iusto vel cumque temporibus dolorem?',
            'email' => 'brgyadmin@mail.com',
            'password' => bcrypt('123123')
        ]);

        $user->assignRole(RoleType::BRGYADMIN);

        $user = User::create([
            'first_name' => 'complainant',
            'last_name' => 'Testing',
            'rank_id' => 5,
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Beatae quas id est commodi? Enim officiis tempore, consectetur dolore, pariatur, laborum tempora repellendus doloribus architecto eaque iusto vel cumque temporibus dolorem?',
            'email' => 'complainant@mail.com',
            'password' => bcrypt('123123')
        ]);

        $user->assignRole(RoleType::COMPLAINANT);
    }
}
