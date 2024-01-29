<?php

namespace App\Services;

use App\Repositories\UserRepository;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserServices {

    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function create(array $data) {

        DB::beginTransaction();

        try {
            $data['password'] = Hash::make($data['password']);

            $createUser = $this->userRepository->create($data);

            DB::commit();

            return $createUser;
        } catch(\Exception $e) {
            DB::rollBack();
            throw $e;
        }

    }
}
