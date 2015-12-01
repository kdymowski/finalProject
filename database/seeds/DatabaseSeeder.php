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
       // $myfile = fopen("D:/School/Mines/WebProgramming/finalProject/finalProject/database/seeds/students.csv", "r") or die("Unable to open file!");
        $myfile = fopen("database/seeds/students.csv", "r") or die("Unable to open file!");
        DB::table('users')->delete();

        while(($line = fgets($myfile)) !== false){
            $rawLine = rtrim($line);
            echo $rawLine;
            $info = explode(",", $rawLine);

            App\User::create(['username' => $info[0].' '.$info[1], 'password' => bcrypt(strval($info[2])), 'email' => $info[3]]);
        }
        fclose($myfile);
        App\User::create(['username' => 'Kyle Dymowski', 'password' => bcrypt('12345678'), 'email' => 'kdymowsk@mines.edu']);

    }
}
