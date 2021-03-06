<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;



class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //  Role::factory()->times(10)->create();
      DB::table('roles')->insert([
          'name' => 'Admin'
      ]);
      DB::table('roles')->insert([
        'name' => 'Auditeur'
    ]);
    DB::table('roles')->insert([
        'name' => 'User'
    ]);

    }
}
