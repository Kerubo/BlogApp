<?php
 
class UserTableSeeder extends Seeder {
 
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vader = DB::table('users')->insert([
                'username'   => 'mary',
                'email'      => 'muthoni@gmail.com',
                'password'   => Hash::make('thedarkside'),
                'first_name' => 'Mary',
                'last_name'  => 'Muthoni',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ]);
 
        DB::table('users')->insert([
                'username'   => 'lilian',
                'email'      => 'adhiambo@gmail.com',
                'password'   => Hash::make('hesnotmydad'),
                'first_name' => 'Lilian',
                'last_name'  => 'Adhiambo',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ]);
 
        DB::table('users')->insert([
                'username'   => 'Lucy',
                'email'      => 'lucykerubo763@gmail.com',
                'password'   => Hash::make('yodaIam'),
                'first_name' => 'Lucy',
                'last_name'  => 'Kerubo',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ]);
    }
 
}