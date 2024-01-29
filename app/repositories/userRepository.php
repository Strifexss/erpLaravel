<?php

namespace App\repositories;

use Illuminate\Support\Facades\DB;

class UserRepository{

    public function create(array $user) {
        DB::table('usuarios')->insert($user);
    }

}
