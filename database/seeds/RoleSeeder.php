<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = ['superadmin', 'admin', 'manager', 'developer', 'designer', 'quality assurance', 'client'];
    
        foreach($roles as $role) {
            DB::table('roles')->insert([
                'name' => $role,
                'created_at' => DB::raw('now()'),
                'updated_at' => DB::raw('now()')
            ]);
        }
    }
}
