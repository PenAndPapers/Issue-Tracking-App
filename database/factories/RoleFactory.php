<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Role;
use Faker\Generator as Faker;

$factory->define(Role::class, function (Faker $faker) {
    $roles = ['superadmin', 'admin', 'manager', 'developer', 'designer', 'quality assurance', 'client'];
    
    foreach($roles as $role) {
        return ['name' => $role];
    }
});
