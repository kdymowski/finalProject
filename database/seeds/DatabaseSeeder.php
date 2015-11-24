<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use League\Csv\Reader;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(UserTableSeeder::class);

        Model::reguard();
    }
}
class UserTableSeeder extends seeder
{
    public function run()
    {
        DB::table('users')->delete();

        App\User::create(['username' => 'Kyle Dymowski', 'password' => bcrypt('12345678'), 'email' => 'kdymowsk@mines.edu']);

    }
}
